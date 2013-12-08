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

  public function rules()
  {
    return array(
      'want_sum' => array(
        array('not_empty'),
        array('numeric'),
      ),
      'sell_sum' => array(
        array('not_empty'),
        array('numeric')
      ),
      'want_currency' => array(
        array('not_empty'),
        array(array($this, 'not_minus')),
        // array(array($this, 'have_methods'))
      ),
      'sell_currency' => array(
        array('not_empty'),
        array(array($this, 'not_minus')),
        // array(array($this, 'have_methods'))
      )
    );
  }

  public function not_minus($value)
  {
    return $value != -1;
  }

  public function have_methods($cur_id)
  {

    $currencies = ORM::factory('currency')
      ->where('category_id','=','4')->find_all()->as_array();

    if(in_array($this->want_currency, $currencies)
      || in_array($this->sell_currency, $currencies))
      {

        die('Cash');
        // if(!isset($post['methods']) || count($post['methods']) < 1)
        // {
          
        // }
      }
  }

} 