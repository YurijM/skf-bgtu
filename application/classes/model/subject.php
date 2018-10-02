<?php defined('SYSPATH') or die('No direct script access.');

class Model_Subject extends ORM {
	protected $_has_many = array(
    'directions' => array(
      'model' => 'direction',
      'through' => 'directions_subjects',
    ),
  );
}