<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Acceptor extends ORM {

  protected $_belongs_to = array(
    'accept_user' => array('model' => 'user', 'foreign_key' => 'accept_user_id'),
    'created_user' => array('model' => 'user', 'foreign_key' => 'created_user_id'),
    'request' => array('model' => 'request', 'foreign_key' => 'request_id')
  );

  protected $_has_many = array(
    'rating' => array('model' => 'rating', 'foreign_key' => 'accept_id')
  );

  public function rules()
  {
    return array(
      'accept_user_id' => array(
        array('not_empty'),
        // array(array($this, 'accept_again'))
      ),
      'created_user_id' => array(
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

  public function self_rating($user_id)
  {
    $rating = ORM::factory('rating')
      ->where('to_user_id','=',$user_id)
      ->and_where('accept_id','=',$this->id)
      ->find();

    if($rating->loaded())
      return HTML::rating($rating->rating) . '</br><small>' . date('d.m.Y H:i', strtotime($rating->date_created)) . '</small>'; 
    else
      return 'еще нет';
  }

  public function you_set_rating($user_id)
  {
    $rating = ORM::factory('rating')
      ->where('from_user_id','=',$user_id)
      ->and_where('accept_id','=',$this->id)
      ->find();

    if($rating->loaded())
      return HTML::rating($rating->rating) . '</br><small>' . date('d.m.Y H:i', strtotime($rating->date_created)) . '</small>'; 
    else
      return HTML::anchor('/rating/set/'.$this->request_id, 'еще нет');;
  }
} 