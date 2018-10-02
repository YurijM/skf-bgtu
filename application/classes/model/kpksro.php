<?php defined('SYSPATH') or die('No direct script access.');

class Model_Kpksro extends ORM {
  protected $_table_name = 'kpk_sro';

	protected $_has_many = array(
    'programs' => array(
      'model' => 'sroprogram',
      'foreign_key' => 'kpk_sro_id',
    ),
  );
}