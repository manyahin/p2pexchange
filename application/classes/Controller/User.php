<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Site {

  public function action_index()
  {
    $this->template->content = View::factory('user/profile')
      ->bind('user', $this->user)
      ->bind('message', $message);

    // if a user is not logged in, redirect to login page
    if (!$this->user)
    {
      $this->redirect('/user/login');
    }

    if (HTTP_Request::POST == $this->request->method())
    {
      $post = $this->request->post();

      try {
        // Update user from POST data
        $user = ORM::factory('user', $this->user->id);
        $user->phone = $post['phone'];
        $user->save();
        
        // Update data;
        $this->user = $user;

        $message = 'Profile saved!';

      } catch (ORM_Validation_Exception $e) {
        
        // Set failure message
        $message = 'There were errors, please see form below.';
        
        // Set errors using custom messages
        $errors = $e->errors('models');
      }
    }
  }

  public function action_info()
  {
    $user = false;
    $merged_bids = false;

    $user_id = $this->request->param('id');
    if($user_id)
    {
      $user_db = ORM::factory('user', $user_id);
      if($user_db->loaded())
      {
        $user = $user_db;

        // Get all users, who accept above one bid
        $all_acceptors = array();
        $bids = $user->bids->find_all();
        if(count($bids) > 0) {
          foreach ($bids as $key => $bid) {
            $acceptors = $bid->acceptors->find_all();
            if(count($acceptors) > 0) {
              foreach ($acceptors as $key => $acceptor) {
                array_push($all_acceptors, $acceptor->user->id); 
              }
            }
          }  
        }

        if(isset($this->user->id))
          if(in_array($this->user->id, $all_acceptors))
            $merged_bids = true;  

      }
    }

    $view = View::factory('user/info')
      ->set('user_profile', $user)
      ->set('merged_bids', $merged_bids); // set what have merged bids.

    $this->template->content = $view;
  }

  public function action_rating()
  {
    $user = false;

    $user_id = $this->request->param('id');
    if($user_id)
    {
      $user_db = ORM::factory('user', $user_id);
      if($user_db->loaded())
      {
        $user = $user_db;
      }
    }

    $ratings = ORM::factory('rating')->where('to_user_id','=',$user_id)->find_all();

    $view = View::factory('user/rating')
      ->set('user_profile', $user)
      ->set('ratings', $ratings);

    $this->template->content = $view;
  }

  public function action_bids() 
  {
    $user = false;
    $merged_bids = false;

    $user_id = $this->request->param('id');
    if($user_id)
    {
      $user_db = ORM::factory('user', $user_id);
      if($user_db->loaded())
      {
        $user = $user_db;
      }
      
      if(isset($this->user->id)) {
        // Get all users, who accept above one bid
        $all_acceptors = array();
        $bids = $user->bids->find_all();
        if(count($bids) > 0) {
          foreach ($bids as $key => $bid) {
            $acceptors = $bid->acceptors->find_all();
            if(count($acceptors) > 0) {
              foreach ($acceptors as $key => $acceptor) {
                if($acceptor->user->id === $this->user->id)
                {
                  $merged_bids[$bid->id] = $bid;
                }
              }
            }
          }  
        }
      }

    }

    $view = View::factory('user/bids')
      ->set('user_profile', $user)
      ->set('merged_bids', $merged_bids); // set what have merged bids.

    $this->template->content = $view;
  }

  public function action_register() 
  {
    if(isset($this->user)) 
      $this->redirect('/');

    $this->template->content = View::factory('user/create')
      ->bind('errors', $errors)
      ->bind('message', $message);
      
    if (HTTP_Request::POST == $this->request->method()) 
    {     
      try {
  
        // Create the user using form values
        $user = ORM::factory('user')->create_user($this->request->post(), array(
          'username',
          'password',
          'email', 
        ));

        // Add date of registration
        $user->date_registration = DB::expr('NOW()');
        $user->save();
        
        // Grant user login role
        $user->add('roles', ORM::factory('role', array('name' => 'login')));
        
        // Reset values so form is not sticky
        $_POST = array();
        
        // Set success message
        $message = "You have added user '{$user->username}' to the database";
        
      } catch (ORM_Validation_Exception $e) {
        
        // Set failure message
        $message = 'There were errors, please see form below.';
        
        // Set errors using custom messages
        $errors = $e->errors('models');
      }
    }
  }
  
  public function action_login() 
  {
    $this->template->content = View::factory('user/login')
      ->bind('message', $message);
      
    if (HTTP_Request::POST == $this->request->method()) 
    {
      // Attempt to login user
      $remember = array_key_exists('remember', $this->request->post()) ? (bool) $this->request->post('remember') : FALSE;
      $user = Auth::instance()->login($this->request->post('username'), $this->request->post('password'), $remember);
      
      // If successful, redirect user
      if ($user) 
      {
        $this->redirect('user/index');
      } 
      else 
      {
        $message = 'Login failed';
      }
    }
  }
  
  public function action_logout() 
  {
    // Log user out
    Auth::instance()->logout();
    
    // Redirect to login page
    $this->redirect('/');
  }

}
?>