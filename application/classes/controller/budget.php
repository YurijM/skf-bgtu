<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Budget extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Финансово-хозяйственная деятельность';

    $budget = View::factory('v_budget');
    
    $budget->mode = $this->mode;
    $budget->page_title = $this->template->page_title;

		$budget->dir_img = ORM::factory('setting', array('key' => 'dir_img'))->value;
    $budget->dir_docs_financial_activity = ORM::factory('setting', array('key' => 'dir_docs_financial_activity'))->value;
   
    $this->template->main = $budget;
  }
}
