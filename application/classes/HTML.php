<?php defined('SYSPATH') OR die('No direct script access.');

abstract class HTML extends Kohana_HTML {

  public static function rating($value)
  {
    $str = '';
    switch ($value) {
      case 2:
        $str = '<strong>2</strong> (Very good)';
        break;
      case 1:
        $str = '<strong>1</strong> (Good)';
        break;
      case -1:
        $str = '<strong>-1</strong> (Bad)';
        break;
      case -2;
        $str = '<strong>-2</strong> (Very bad)';
        break;
      default:
        $str = '<strong>Unknow</strong>';
        break;
    }
    unset($value);
    return $str;
  }

}
