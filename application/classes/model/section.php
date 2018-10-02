<?php defined('SYSPATH') or die('No direct script access.');

class Model_Section extends ORM {

	protected $_belongs_to = array(
    'direction' => array(
      'model' => 'direction',
      'foreign_key' => 'direction_id',
    ),
  );
}