<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Governance extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Руководство. Педагогический состав';

    $governance = View::factory('v_governance');
    
    $governance->mode = $this->mode;
    $governance->page_title = $this->template->page_title;

    $governance->departments = ORM::factory('department')->order_by('department')->find_all();

    $governance->governance = $this->widget_load($this->widgets_folder.'governance');
    //$governance->departments = $this->widget_load($this->widgets_folder.'departments');
    $governance->personnel_info = $this->widget_load($this->widgets_folder.'personnelinfo/governance');

    $this->template->main = $governance;
  }
}
