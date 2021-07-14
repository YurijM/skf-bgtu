<?php defined('SYSPATH') or die('No direct script access.');

class Model_Applicationsnumbercollege extends ORM {
  protected $_table_name = 'applications_number_college';

  protected $_belongs_to = array(
    'direction' => array(
      'model' => 'direction',
      'foreign_key' => 'direction_id',
    ),
  );
}