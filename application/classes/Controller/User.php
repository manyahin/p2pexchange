<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Site {

  public function action_index()
  {
    $user = Auth::instance()->get_user();
    if(!$user)
      $this->redirect('/login');

    $this->template->content = View::factory('user/profile')
      ->bind('user', $this->user)
      ->bind('message', $message);

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
                array_push($all_acceptors, $acceptor->accept_user->id); 
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
                if($acceptor->accept_user->id === $this->user->id)
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
    $user = Auth::instance()->get_user();
    if($user)
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
          'email'
        ));

        // Add date of registration
        $user->date_registration = time();
        $user->save();
        
        // Grant user login role
        $user->add('roles', ORM::factory('role', array('name' => 'login')));
        
        // Reset values so form is not sticky
        $_POST = array();
        
        Auth::instance()->force_login($user->username);

        // Mail
        
        $verify_link = HTML::anchor('/user/verify/' . $user->verify_hash(), 'Verify My Email Address');

        $message = '<p>Please click the link below to complete verification:</p><p>{{verify_link}}</p><p>If you did not sign up for this account you can ignore this email and the account will be deleted.</p><p>The P2P Team</p>';
        $message = str_replace('{{verify_link}}', $verify_link, $message);

        $email = Email::send_mail($user->email, 'Verify My Email Address', $message);

        if($email)
          $this->redirect('/user/verify');
        else
          die('Unknown error with mail function');
        
      } catch (ORM_Validation_Exception $e) {
        
        // Set failure message
        $message = 'There were errors, please see form below.';
        
        // Set errors using custom messages
        $errors = $e->errors('models');
      }
    }
  }

  public function action_verify()
  {
    $user = Auth::instance()->get_user();
    if(!$user) 
      $this->redirect('/login');

    if($user->verified)
      $this->redirect('/user/terms');

    $code = $this->request->param('id');
    if(isset($code))
    {
      if($code === $user->verify_hash()) {
        var_dump('Success!');
        $user->verified = 1;
        $user->save();

        $this->redirect('/user/terms');

      } else {
        var_dump('Bad code :(');
        $error = 'Verification code is incorrect, try change email'; 
      }
    }

    if(HTTP_Request::POST == $this->request->method()) 
    {
      $values = $this->request->post();

      $email = Validation::factory($values)
        ->rule('email', 'not_empty')
        ->rule('email', 'email');

      if($email->check())
      {
        $user->email = $values['email'];
        $user->save();
        
        // Mail
        
        $verify_link = HTML::anchor('/user/verify/' . $user->verify_hash(), 'Verify My Email Address');

        $message = '<p>Please click the link below to complete verification:</p><p>{{verify_link}}</p><p>If you did not sign up for this account you can ignore this email and the account will be deleted.</p><p>The P2P Team</p>';
        $message = str_replace('{{verify_link}}', $verify_link, $message);

        $email = Email::send_mail($user->email, 'Verify My Email Address', $message);

        if(!$email)
          die('Unknown error with mail function');

        $message = 'A new verification email has been sent to ' . $values['email'];
      } 
      else
      {
        $error = $email->errors('user');
      }
    }

    $view = View::factory('user/verify')
      ->set('email', $user->email)
      ->bind('message', $message)
      ->bind('error', $error);

    $this->template->content = $view;
  }

  public function action_terms()
  {
    $user = Auth::instance()->get_user();
    if(!$user) 
      $this->redirect('/login');

    if(!$user->verified)
      $this->redirect('/user/verified');

    if($user->accept_terms)
      $this->redirect('/');

    $accept = $this->request->param('id');
    if($accept === 'accept')
    {
      $user->accept_terms = 1;
      $user->save();

      $this->redirect('/');
    }

    $view = View::factory('user/terms');

    $this->template->content = $view;
  }
  
  public function action_login() 
  {
    $user = Auth::instance()->get_user();
    if($user)
      $this->redirect('/');

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
        $this->user_valid();
        $this->redirect('user/');
      } 
      else 
      {
        $message = 'Login failed';
      }
    }
  }

  public function action_ratings()
  {
    $acceptions = ORM::factory('acceptor')
      ->where('accept_user_id','=',$this->user->id)
      ->or_where('created_user_id','=',$this->user->id)
      ->order_by('date_created', 'DESC')
      ->find_all();

    $view = View::factory('user/ratings')
      ->bind('acceptions', $acceptions);

    $this->template->content = $view;
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