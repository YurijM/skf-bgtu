<?php defined('SYSPATH') or die('No direct script access.');

class Model_Governance extends ORM {
  protected $_table_name = 'governance';

  protected $_belongs_to = array(
    'personnel' => array(
      'model' => 'personnel',
      'foreign_key' => 'personnel_id',
    )
  );
}