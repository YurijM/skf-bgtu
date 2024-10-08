<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Objects extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Материально-техническое обеспечение и оснащенность образовательного процесса. Доступная среда';

    $objects = View::factory('v_objects');
    
    $objects->mode = $this->mode;
    $objects->page_title = $this->template->page_title;

		$objects->dir_docs = ORM::factory('setting', array('key' => 'dir_docs_docs'))->value;
		$objects->dir_img = ORM::factory('setting', array('key' => 'dir_img'))->value;
		$objects->dir_docs_logistical_support = ORM::factory('setting', array('key' => 'dir_docs_logistical_support'))
			->value;
   
    $this->template->main = $objects;
  }
}
