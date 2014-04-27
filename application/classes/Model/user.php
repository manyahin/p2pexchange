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

  public function rating() {
    
    $sum_rating = 0;
    $ratings = ORM::factory('rating')->where('to_user_id', '=', $this->id)->find_all();
    
    foreach ($ratings as $key => $rating) {
      $sum_rating += (int) $rating->rating;
    }

    if($sum_rating > 0)
      return '+'.$sum_rating;
    else
      return $sum_rating;
  }

  public function count_ratings() {
    return count(ORM::factory('rating')->where('to_user_id','=', $this->id)->find_all());
  }

  public function verify_hash() {
    return md5($this->email . $this->password . 'verify_link');
  }

  public function verify_password_hash() {
    return md5($this->email . $this->password . 'verify_password_link');
  }

  // public function verified() {
  //   return ORM::factory('user', $this->id)->verified();
  // }

} // End User Model