<?php defined('SYSPATH') or die('No direct script access.');

class Model_Studentconference extends ORM {
  protected $_table_name = 'student_conferences';
  
	protected $_belongs_to = array(
    'organizer' => array(
      'model' => 'studentconferenceorganizer',
      'foreign_key' => 'organizer_id',
    ),
  );
}