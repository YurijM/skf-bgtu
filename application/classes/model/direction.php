<?php defined('SYSPATH') or die('No direct script access.');

class Model_Direction extends ORM {

	protected $_has_many = array(
    'applicationsnumber' => array(
      'model' => 'applicationsnumber',
      'foreign_key' => 'direction_id',
    ),
    'section' => array(
      'model' => 'section',
      'foreign_key' => 'direction_id',
    ),
    'subjects' => array(
      'model' => 'subject',
      'through' => 'directions_subjects',
    ),
  );
}