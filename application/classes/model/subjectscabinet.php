<?php defined('SYSPATH') or die('No direct script access.');

class Model_Subjectscabinet extends ORM {
	protected $_table_name = 'subjects_cabinet';

	protected $_has_many = array(
		'faculties' => array(
			'model' => 'faculty',
			'through' => 'faculties_subjects',
		),
	);
}