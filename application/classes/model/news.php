<?php defined('SYSPATH') or die('No direct script access.');

class Model_News extends ORM {
  protected $_table_name = 'news';

	protected $_has_many = array(
    'galery' => array(
      'model' => 'newsgalery',
      'foreign_key' => 'news_id',
    ),
  );

  protected $_belongs_to = array(
    'photo' => array(
      'model' => 'newsgalery',
      'foreign_key' => 'news_galery_id',
    ),
  );
  
  //--------------------------------------------------------------------------//
  function get_page_by_id($id, $count)
  {
    $page = 1;
    $start = 0;
    
    $query = DB::query(Database::SELECT, 'SELECT id FROM '.$this->_table_name.' ORDER BY date DESC LIMIT :count OFFSET :start')
      ->bind(':start', $start)
      ->bind(':count', $count);
    
    while ($result = $query->as_object()->execute())
    {
      foreach ($result as $news)
      {
        echo $news->id.'<br>';
        if ($news->id == $id)
        {
          return $page;
        }
      }
      $page++;
      $start += $count;
    }
    
    return $page;
  }
  
  //--------------------------------------------------------------------------//
  function get_count_pages($count_records)
  {
    return ceil(ORM::factory($this->_table_name)->count_all() / $count_records);
  }
}