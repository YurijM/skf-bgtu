<?php defined('SYSPATH') or die('No direct script access.');

class Model_Matriculant extends ORM {
  protected $_belongs_to = array(
    'section' => array(
      'model' => 'section',
      'foreign_key' => 'section_id',
    ),
    'subject' => array(
      'model' => 'subject',
      'foreign_key' => 'section_id_1',
    ),
    'subject' => array(
      'model' => 'subject',
      'foreign_key' => 'section_id_2',
    ),
    'subject' => array(
      'model' => 'subject',
      'foreign_key' => 'section_id_3',
    ),
  );
}