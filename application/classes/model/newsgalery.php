<?php defined('SYSPATH') or die('No direct script access.');

class Model_Newsgalery extends ORM {
  protected $_table_name = 'news_galery';

  protected $_belongs_to = array(
    'news' => array(
      'model' => 'news',
      'foreign_key' => 'news_id',
    ),
  );
}