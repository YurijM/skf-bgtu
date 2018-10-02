<?php defined('SYSPATH') or die('No direct script access.');

class Model_Dissertationdefense extends ORM {
  protected $_table_name = 'dissertation_defense';
  
  protected $_belongs_to = array(
    'personnel' => array(
      'model' => 'personnel',
      'foreign_key' => 'personnel_id',
    ),
    'degree' => array(
      'model' => 'degree',
      'foreign_key' => 'degree_id',
    ),
  );
}