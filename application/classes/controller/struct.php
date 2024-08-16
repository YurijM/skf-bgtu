<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Struct extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Структура и органы управления образовательной организацией';

    $structure = View::factory('v_struct');
    
    $structure->mode = $this->mode;
    $structure->page_title = $this->template->page_title;
   
    $structure->address = ORM::factory('setting', ['key' => 'address'])->value;
    $structure->dir_img = ORM::factory('setting', ['key' => 'dir_img'])->value;
    $structure->dir_docs_structure = ORM::factory('setting', ['key' => 'dir_docs_structure'])->value;

    $structure->personnel = ORM::factory('structurepersonnel')->with('structure')->order_by('structure.order_no')
      ->order_by('order_no')->find_all();
		$structure->personnel_count = $structure->personnel->count();

    $this->template->main = $structure;
  }
}
