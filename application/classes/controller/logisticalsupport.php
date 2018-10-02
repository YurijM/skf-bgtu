<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Logisticalsupport extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Материально-техническое обеспечение';

    $logistical_support = View::factory('v_logistical_support');
    
    $logistical_support->mode = $this->mode;
    $logistical_support->page_title = $this->template->page_title;

    $logistical_support->dir_docs_logistical_support = ORM::factory('setting', array('key' => 'dir_docs_logistical_support'))->value;
   
    $this->template->main = $logistical_support;
  }
}
