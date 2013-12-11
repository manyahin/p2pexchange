<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Rating extends ORM {

  protected $_belongs_to = array(
    'accept' => array('model' => 'acceptor', 'foreign_key' => 'accept_id'),
    'to_user' => array('model' => 'user', 'foreign_key' => 'to_user_id'), 
    'from_user' => array('model' => 'user', 'foreign_key' => 'from_user_id') 
  );

} 