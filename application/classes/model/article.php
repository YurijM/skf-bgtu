<?php defined('SYSPATH') or die('No direct script access.');

class Model_Article extends ORM {
  protected $_belongs_to = array(
    'periodical' => array(
      'model' => 'periodical',
      'foreign_key' => 'periodical_id',
    ),
  );

	protected $_has_many = array(
    'authors' => array(
      'model' => 'author',
      'through' => 'articles_authors',
    ),
  );
}