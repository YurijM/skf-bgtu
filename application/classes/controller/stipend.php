<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Stipend extends Controller_Base {
  //==========================================================================//
	public function action_index()
  {
    $this->template->page_title = 'Стипендии и иные виды материальной поддержки';

    $stipend = View::factory('v_stipend');

    $stipend->mode = $this->mode;
    $stipend->page_title = $this->template->page_title;
    
    $stipend->dir_docs_stipend = ORM::factory('setting', array('key' => 'dir_docs_stipend'))->value;

    $this->template->main = $stipend;
  }
}
