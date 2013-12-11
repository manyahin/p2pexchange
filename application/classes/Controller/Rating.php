<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Rating extends Controller_Site {

  public function action_set()
  {
    $bid_id = $this->request->param('id');
    $bid = ORM::factory('request', $bid_id);
    if(!$bid->loaded()) // Check of bid exist;
      $this->redirect('/');

    $acceptor = $bid->acceptors->where('user_id','=',$this->user->id)->find();
    if(!$acceptor->loaded()) // Check for this bid have acception from this user;
      $this->redirect('/');

    $rating = $acceptor->rating->where('from_user_id','=',$this->user->id)
      ->and_where('to_user_id','=',$bid->user_id)
      ->and_where('accept_id','=',$acceptor->id); // Check for double set ratings;
    if($rating->loaded())
      $this->redirect('/');

    $rating = $acceptor->rating->where('from_user_id','=',$this->user->id)
      ->and_where('to_user_id','=',$bid->user_id)
      ->and_where('accept_id','=',$acceptor->id)
      ->find();

    if(!$rating->loaded()) // Check for ratings from these users to this bid;
      $this->redirect('/');

    $error = false;
    $message = false;

    // logics
    if (HTTP_Request::POST == $this->request->method())
    {
      
      $values = Arr::extract($this->request->post(), array('rating','comment'));

      if(!in_array($values['rating'], array(2,1,-1,-2)))
        $error = 'Bad rating';

      // add rating;
      if(!$error) {
        $rating = ORM::factory('rating');
        $rating->accept_id = $acceptor->id;
        $rating->from_user_id = $this->user->id;
        $rating->to_user_id = $bid->user_id;
        $rating->rating = $values['rating'];
        $rating->comment = $values['comment'];
        $rating->date_created = DB::expr('NOW()');  
        $rating->save();

        $message = 'Rating set succeful';
      } 
    
    }

    $view = View::factory('rating/set')
      ->bind('error', $error)
      ->bind('message', $message)
      ->bind('values', $values);

    $this->template->content = $view;
  } 

}