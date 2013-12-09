<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_User extends Model_Auth_User {

  protected $_has_many = array(
    'user_tokens' => array('model' => 'User_Token'),
    'roles'       => array('model' => 'Role', 'through' => 'roles_users'),
    'bids' => array(
      'model'       => 'request',
      'foreign_key' => 'user_id',
    ),
  );

} // End User Model