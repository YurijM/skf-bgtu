<?php defined('SYSPATH') or die('No direct script access.');

class Model_Degree extends ORM {
	protected $_has_many = array(
    'personnel' => array(
      'model' => 'personnel',
      'through' => 'personnel_degrees',
    ),
  );
}