<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Financialactivity extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Финансово-хозяйственная деятельность';

    $financial_activity = View::factory('v_financial_activity');
    
    $financial_activity->mode = $this->mode;
    $financial_activity->page_title = $this->template->page_title;
    
    $financial_activity->dir_docs_financial_activity = ORM::factory('setting', array('key' => 'dir_docs_financial_activity'))->value;
   
    $this->template->main = $financial_activity;
  }
}
