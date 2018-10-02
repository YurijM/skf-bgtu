<?php defined('SYSPATH') or die('No direct script access.');

class Model_Scientificactivity extends ORM {
  protected $_table_name = 'scientific_activity';
  
	protected $_belongs_to = array(
    'personnel' => array(
      'model' => 'personnel',
      'foreign_key' => 'personnel_id',
    ),
  );
}