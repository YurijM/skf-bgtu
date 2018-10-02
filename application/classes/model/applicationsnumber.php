<?php defined('SYSPATH') or die('No direct script access.');

class Model_Applicationsnumber extends ORM {
  protected $_table_name = 'applications_number';

  protected $_belongs_to = array(
    'direction' => array(
      'model' => 'direction',
      'foreign_key' => 'direction_id',
    ),
  );
}