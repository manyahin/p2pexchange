<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site extends Controller_Template {

  public $template = 'site';
  public $user;

  public function before() 
  {
    parent::before();

    // Check user auth
    $auth_user = Auth::instance()->get_user();
    if($auth_user)
    {
      if($auth_user->has('roles',1))
      {
        $this->user = $auth_user;
      }
      elseif($auth_user->has('roles',2))
      { 
        $this->user = $auth_user;
        $this->admin = true;
      }
    }

    // Language
    I18n::lang(Cookie::get('lang', 'ru')); // устанавливаем язык из Куки, либо ставим русский, если Куки нету
    if (Arr::get($_GET, 'lang', NULL) != NULL) // если был передан GET параметр lang - выполняем следующие условия:
    {
       Cookie::set('lang', strip_tags(Arr::get($_GET, 'lang'))); // устанавливаем Куку с выбранным языком
       I18n::lang(strip_tags(Arr::get($_GET, 'lang'))); // меняем текущий язык на выбранный
    }

    // For all pages;
    $this->template->user = $this->user;
    $this->template->language = I18n::lang();

  } 
}