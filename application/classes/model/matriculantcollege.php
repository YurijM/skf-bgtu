<?php defined('SYSPATH') or die('No direct script access.');

class Model_Matriculantcollege extends ORM {
	protected $_table_name = 'matriculants_college';

	protected $_belongs_to = array(
    'section' => array(
      'model' => 'section',
      'foreign_key' => 'section_id',
    ),
  );
}