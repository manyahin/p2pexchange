<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Acceptor extends ORM {

  protected $_belongs_to = array(
    'user' => array('model' => 'user', 'foreign_key' => 'user_id'),
    'request' => array('model' => 'request', 'foreign_key' => 'request_id')
  );

  protected $_has_one = array(
    'rating' => array('model' => 'rating', 'foreign_key' => 'accept_id')
  );

  public function rules()
  {
    return array(
      'user_id' => array(
        array('not_empty'),
        // array(array($this, 'accept_again'))
      ),
      'request_id' => array(
        array('not_empty'),
      ),
      'date_created' => array(
        array('not_empty'),
      )
    );
  }

  public function accept_again($user_id) 
  {
    return ORM::factory('request')->acceptors->where('user_id','=',$user_id)->loaded();
  }

} 