<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Rating extends Controller_Site {

  public function action_set()
  {
    $user = Auth::instance()->get_user();
    if(!$user)
      $this->redirect('/login');
    
    $bid_id = $this->request->param('id');
    $bid = ORM::factory('request', $bid_id);
    if(!$bid->loaded()) // Check of bid exist;
      die('This bid do not exists!');

    $acceptor = $bid->acceptors
      ->where_open()
        ->where('created_user_id','=', $this->user->id)
        ->or_where('accept_user_id','=', $this->user->id)
      ->where_close()
      ->and_where('request_id','=', $bid->id)
      ->find(); // Find acceptors for this user

    if(!$acceptor->loaded()) // Check for this bid have acception from this user;
      die('You do not have acceptions with this user!');

    $rating_to_user = false;
    if($acceptor->created_user_id == $this->user->id) {
      // this user create bid
      $rating = ORM::factory('rating')
        ->where('from_user_id','=', $this->user->id)
        ->and_where('to_user_id','=', $acceptor->accept_user_id)
        ->and_where('accept_id','=', $acceptor->id)
        ->find();

      $rating_to_user = $acceptor->accept_user_id;
    } else {
      // this user accept bid
      $rating = ORM::factory('rating')
        ->where('from_user_id','=', $this->user->id)
        ->and_where('to_user_id','=', $bid->user->id)
        ->and_where('accept_id','=', $acceptor->id)
        ->find();

      $rating_to_user = $bid->user->id;
    }

    if($rating->loaded())
      die('You already set rating fot this bid!');

    $error = false;
    $message = false;

    // logics
    if (HTTP_Request::POST == $this->request->method())
    {

      $values = Arr::extract($this->request->post(), array('rating','comment'));

      if(!in_array($values['rating'], array(2,1,-1,-2)))
        $error = 'Bad rating';

      if(empty($rating_to_user))
        die('Unknown user');

      // add rating;
      if(!$error) {
        $rating = ORM::factory('rating');
        $rating->accept_id = $acceptor->id;
        $rating->from_user_id = $this->user->id;
        $rating->to_user_id = $rating_to_user;
        $rating->rating = $values['rating'];
        $rating->comment = $values['comment'];
        $rating->date_created = DB::expr('NOW()');  
        $rating->save();

        $message = 'Rating set succeful';

        $this->redirect('user/ratings');
      } 
    
    }

    // if ($this->request->is_ajax())

    $view = View::factory('rating/set')
      ->bind('error', $error)
      ->bind('message', $message)
      ->bind('values', $values)
      ->bind('bid',$bid);

    // $this->auto_render = false;
    // $this->content = $view;
    // $this->response->body($this->content->render());
      $this->template->content = $view;
  } 

}