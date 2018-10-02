<?php defined('SYSPATH') or die('No direct script access.');

class Model_Personnel extends ORM {
  protected $_table_name = 'personnel';

  protected $_belongs_to = array(
    'department' => array(
      'model' => 'department',
      'foreign_key' => 'department_id',
    ),
    'employment_type' => array(
      'model' => 'employmenttype',
      'foreign_key' => 'employment_type_id',
    ),
    'academic_title' => array(
      'model' => 'academictitle',
      'foreign_key' => 'academic_title_id',
    ),
    'post' => array(
      'model' => 'post',
      'foreign_key' => 'post_id',
    ),
  );

	protected $_has_many = array(
    'degrees' => array(
      'model' => 'degree',
      'through' => 'personnel_degrees',
    ),
  );
}