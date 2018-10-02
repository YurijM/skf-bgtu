<?php defined('SYSPATH') or die('No direct script access.');

class Model_Sroprogram extends ORM {
  protected $_table_name = 'sro_programs';
  
  protected $_belongs_to = array(
    'sro' => array(
      'model' => 'kpksro',
      'foreign_key' => 'kpk_sro_id',
    ),
  );
}