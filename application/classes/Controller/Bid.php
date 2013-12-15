<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Bid extends Controller_Site {

  public function action_index()
  {
    $requests = ORM::factory('request')->order_by('id','DESC')->find_all();
    $count_requests = count($requests);

    $view = View::factory('Bid/list')
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

    $view = View::factory('Bid/info')->
      bind('request', $request);

    $this->template->content = $view;
  }

  public function action_create()
  {
    if(!$this->user)
      $this->redirect('/');

    $currencies = ORM::factory('currency')->find_all();
    $currencies_array = array(-1 => ''); // First empty element
    $cash_currencies = array();
    foreach($currencies as $key => $cur) {
      $currencies_array[$cur->category->name][$cur->id] = $cur->name; 
    }

    $methods = ORM::factory('method')->find_all();
    $countries = ORM::factory('country')->find_all();
    foreach($countries as $key => $country)
      $countries_array[$country->id] = $country->name;

    $this->template->content = View::factory('Bid/create')
      ->set('values', $_POST)
      ->set('methods', $methods)
      ->set('countries', $countries_array)
      ->set('all_currencies', $currencies_array)
      ->bind('errors', $errors)
      ->bind('message', $message);

    $errors = array();

    if (HTTP_Request::POST == $this->request->method()) 
    {   

      $post = $this->request->post();

      // Don't know how make this validation from model
      if(array_key_exists($post['want_currency'], $currencies_array['Cash'])
        || array_key_exists($post['sell_currency'], $currencies_array['Cash']))
      {
        if(empty($post['methods'])) {
          $errors['methods'] = 'Method of transfer not set!';
        }
      }

      try {

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
        $request->save();

        if(isset($post['methods']))
        {
          $request = ORM::factory('request', $request->id);
          if(count($post['methods']) > 1)
            foreach($post['methods'] as $method)
              $request->add('methods',$method);
          else        
            $request->add('methods',$post['methods'][0]);        
        }
        

        // Reset values so form is not sticky
        $_POST = array();
        
        // Set success message
        $message = "You have added new request";

        HTTP::redirect(URL::site());
        
      } catch (ORM_Validation_Exception $e) {
        
        // Set failure message
        $message = 'There were errors, please see form below.';
        
        // Set errors using custom messages
        $errors = array_merge($e->errors('models'), $errors);

      }
    }
  }

  public function action_accept()
  {
    if(!$this->user) $this->redirect('/user/login');

    $request_id = $this->request->param('id');
    $request = ORM::factory('request', $request_id);

    $errors = array();
    
    if($request->user_id == $this->user->id)
      $errors['error'] = 'Denied to accept yourself bid';

    $double = $request->acceptors->where('accept_user_id','=',$this->user->id)->find_all();
    if(count($double) > 0) 
      $errors['error'] = 'Denied to again accept bid';

    $this->template->content = View::factory('Bid/accept')
      ->bind('user', $this->user)
      ->bind('request', $request)
      ->bind('errors', $errors)
      ->bind('message', $message)
      ->bind('user_created', $user_created);

    if (HTTP_Request::GET == $this->request->method()
      && empty($errors))
    { 
      try { 

        $acceptor = ORM::factory('acceptor');
        $acceptor->request_id = $request_id;
        $acceptor->accept_user_id = $this->user->id;
        $acceptor->created_user_id = $request->user->id;
        $acceptor->date_created = DB::expr('NOW()');
        $acceptor->save();
      
        $user_created = $request->user;

        $message = "You have accept bid";

      } catch (ORM_Validation_Exception $e) {

        $message = 'There were errors, please see below.';
        $errors = $e->errors('models');
      
      }
    }

  }

}








