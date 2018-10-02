<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Headincome extends Controller_Base {
  //==========================================================================//
	public function action_index()
  {
    $this->template->page_title = 'Сведения о доходах руководителя и членов его семьи';

    $income = View::factory('v_head_income');
    
    $income->mode = $this->mode;
    $income->page_title = $this->template->page_title;
    $income->dir_docs_head_income = ORM::factory('setting', array('key' => 'dir_docs_head_income'))->value;

    $this->template->main = $income;
  }
}
