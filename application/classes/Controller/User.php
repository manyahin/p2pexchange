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
    $user_id = $this->request->param('id');
    if($user_id)
    {
      $user_db = ORM::factory('user', $user_id);
      if($user_db->loaded())
      {
        $user = $user_db;
      }
    }

    $view = View::factory('user/info')
      ->set('user', $user);

    $this->template->content = $view;
  }

  public function action_create() 
  {
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
          'email'       
        ));
        
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
    $this->redirect('user/login');
  }

}
?>