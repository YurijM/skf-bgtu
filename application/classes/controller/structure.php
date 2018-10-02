<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Structure extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Структура и органы управления';

    $structure = View::factory('v_structure');
    
    $structure->mode = $this->mode;
    $structure->page_title = $this->template->page_title;
   
    $structure->dir_img = ORM::factory('setting', array('key' => 'dir_img'))->value;
    $structure->dir_docs_structure = ORM::factory('setting', array('key' => 'dir_docs_structure'))->value;

    $structure->personnel = ORM::factory('structurepersonnel')->with('structure')->order_by('structure.order_no')
      ->order_by('order_no')->find_all();

    $this->template->main = $structure;
  }
}
