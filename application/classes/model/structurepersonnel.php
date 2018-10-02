<?php defined('SYSPATH') or die('No direct script access.');

class Model_Structurepersonnel extends ORM {
  protected $_table_name = 'structure_personnel';

  protected $_belongs_to = array(
    'personnel' => array(
      'model' => 'personnel',
      'foreign_key' => 'personnel_id',
    ),
    'structure' => array(
      'model' => 'structure',
      'foreign_key' => 'structure_id',
    ),
  );
}