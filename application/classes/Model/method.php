<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Method extends ORM {

  protected $_has_many = array(
    'requests' => array(
        'model'   => 'request',
        'through' => 'methods_requests',
      ),
  );

} 