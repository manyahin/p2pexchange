<?php defined('SYSPATH') or die('No direct script access.');

class Email extends Kohana_Email {

  public static function send_mail($to, $subject, $message)
  {
    $set = Kohana::$config->load('p2p');

    $email = Email::factory($subject, $message)
    ->message($message, 'text/html')
    ->to($to)
    ->from($set->email, $set->title)
    ->send();

    return $email;
  }

}