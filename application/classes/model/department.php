<?php defined('SYSPATH') or die('No direct script access.');

class Model_Department extends ORM {
  protected $_belongs_to = array(
    'head' => array(
      'model' => 'personnel',
      'foreign_key' => 'head_personnel_id',
    ),
  );
}