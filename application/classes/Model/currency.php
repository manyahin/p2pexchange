<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Currency extends ORM {

  protected $_belongs_to = array(
    'category' => array('model' => 'Currency_Category', 'foreign_key' => 'category_id')
  );
  
} 