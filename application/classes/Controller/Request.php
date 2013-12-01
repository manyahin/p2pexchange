<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Request extends Controller_Site {

  public function action_index()
  {
    // Auth::instance()->login("my@email.com", "mypa55word");

    // $this->template->content = 'content';
    $requests = ORM::factory('request')->order_by('id','DESC')->find_all();
    $count_requests = count($requests);

    $view = View::factory('request/list')
      ->bind('requests', $requests)
      ->bind('count', $count_requests);

    $this->template->content = $view;
  }

  public function action_info()
  {
    $request = false;
    $request_id = $this->request->param('id');
    if($request_id)
    {
      $request_db = ORM::factory('request', $request_id);
      if($request_db->loaded())
      {
        $request = $request_db;
      }
    }

    $view = View::factory('request/info')->
      bind('request', $request);

    $this->template->content = $view;
  }

  public function action_create()
  {
    if(!$this->user)
      $this->redirect('/');

    $currencies = ORM::factory('currency')->find_all();
    $currencies_array = array();
    foreach($currencies as $cur)
      $currencies_array[$cur->category->name][] = $cur; 

    $methods = ORM::factory('method')->find_all();
    $countries = ORM::factory('country')->find_all();

    $this->template->content = View::factory('Request/create')
      ->bind('methods', $methods)
      ->bind('countries', $countries)
      ->bind('all_currencies', $currencies_array)
      ->bind('errors', $errors)
      ->bind('message', $message);

    if (HTTP_Request::POST == $this->request->method()) 
    {     
      try {

        $post = $this->request->post();

        // Create the user using form values
        $request = ORM::factory('request');
        $request->user_id = $this->user->id;
        $request->want_sum = $post['want_sum'];
        $request->want_currency = $post['want_currency'];
        $request->sell_sum = $post['sell_sum'];
        $request->sell_currency = $post['sell_currency'];
        $request->comment = $post['comment'];
        $request->date_created = DB::expr('NOW()');
        if($post['country'])
        {
          $request->country_id = $post['country'];
        }
        if($post['methods'])
        {
          $request = ORM::factory('request', $request->id);
          $request->add('methods',$post['methods'][0]);
        }
        $request->save();

        // Reset values so form is not sticky
        $_POST = array();
        
        // Set success message
        $message = "You have added new request";
        
      } catch (ORM_Validation_Exception $e) {
        
        // Set failure message
        $message = 'There were errors, please see form below.';
        
        // Set errors using custom messages
        $errors = $e->errors('models');
      }
    }
  }

} // End Welcome
