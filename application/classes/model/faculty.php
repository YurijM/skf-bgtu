<?php defined('SYSPATH') or die('No direct script access.');

class Model_Faculty extends ORM {
	protected $_has_many = array(
		'literature' => array(
			'model' => 'literature',
			'foreign_key' => 'faculty_id'
		),
		'subjects' => array(
			'model' => 'subjectscabinet',
			'through' => 'faculties_subjects',
		)
	);
}