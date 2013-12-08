<?php defined('SYSPATH') OR die('No direct script access.');

class Controller_Page extends Controller_Site {

  public function action_about()
  {
    $content = View::factory('page/about');
    $this->template->content = $content;
  }

}