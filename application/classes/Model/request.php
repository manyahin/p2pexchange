<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Request extends ORM {

  protected $_belongs_to = array(
    'user' => array('model' => 'user', 'foreign_key' => 'user_id'),
    'want_currency_name' => array('model' => 'currency', 'foreign_key' => 'want_currency'),
    'sell_currency_name' => array('model' => 'currency', 'foreign_key' => 'sell_currency'),
    'country' => array('model' => 'country')
  );


  protected $_has_many = array(
    'methods' => array(
      'model'   => 'method',
      'through' => 'methods_requests',
    ),
    'acceptors' => array(
      'model' => 'acceptor',
      'foreign_key' => 'request_id'
    )
  );

} 