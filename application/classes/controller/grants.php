<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Grants extends Controller_Base {
  //==========================================================================//
	public function action_index()
  {
    $this->template->page_title = 'Стипендии и меры поддержки обучающихся';

    $grants = View::factory('v_grants');

    $grants->mode = $this->mode;
    $grants->page_title = $this->template->page_title;
    
    $grants->dir_docs_stipend = ORM::factory('setting', array('key' => 'dir_docs_stipend'))->value;
    $grants->dir_img = ORM::factory('setting', array('key' => 'dir_img'))->value;

    $this->template->main = $grants;
  }
}
