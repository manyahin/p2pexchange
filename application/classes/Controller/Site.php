<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site extends Controller_Template {

  public $user;

  public function before() 
  {
    parent::before();

    // Check user auth
    $auth_user = Auth::instance()->get_user();
    if($auth_user)
    {
      $this->user = $auth_user;
      if($auth_user->has('roles',2))
        $this->user->admin = true;

      // fix for unregister users, but with cookie and session
      $usr = ORM::factory('user', $this->user->id);
      if(!$usr->loaded())
        Auth::instance()->logout();  
    }

    View::set_global('user',$this->user);

    // Language
    I18n::lang(Cookie::get('lang', 'ru')); // устанавливаем язык из Куки, либо ставим русский, если Куки нету
    if (Arr::get($_GET, 'lang', NULL) != NULL) // если был передан GET параметр lang - выполняем следующие условия:
    {
       Cookie::set('lang', strip_tags(Arr::get($_GET, 'lang'))); // устанавливаем Куку с выбранным языком
       I18n::lang(strip_tags(Arr::get($_GET, 'lang'))); // меняем текущий язык на выбранный
    }

    View::set_global('language', I18n::lang());

    // Site config
    $settings = Kohana::$config->load('p2p');
    $this->template->title = $settings->title;
    $this->template->description = $settings->description;

    // Styles
    $styles = array('normalize');
    if(I18n::lang() == 'he')
      array_push($styles,'foundation.he');
    else
      array_push($styles,'foundation');
    array_push($styles, 'app');
    $this->template->styles = $styles;

    // Scripts
    // 
    
    // User verification and terms accept
    if($this->user)
    {
      if(!$this->user->verified)
      {
        if($this->request->controller() != 'User' ||
          $this->request->action() != 'verify')
            $this->redirect('/user/verify');
      }
      elseif(!$this->user->accept_terms)
      { 
        if($this->request->controller() != 'User' || 
          $this->request->action() != 'terms')
            $this->redirect('/user/terms');     
      }
    }

    // Messages from other controller via sessions
    $message = '';

    $session = Session::instance();
    if($message = $session->get('message'))
    {
      $this->template->message = $message;
      $session->delete('message');
    } else {
      $this->template->message = '';
    }

  }

  public function user_valid()
  {
    $user = Auth::instance()->get_user();
    if(!$user) 
      $this->redirect('/login');

    if(!$user->verified)
      $this->redirect('/user/verify');

    if(!$user->accept_terms)
      $this->redirect('/user/terms');

    return true;
  } 

}