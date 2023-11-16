<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Employees extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Руководство. Педагогический (научно-педагогический) состав';

    $employees = View::factory('v_employees');
    
    $employees->mode = $this->mode;
    $employees->page_title = $this->template->page_title;

    /*$employees->departments = ORM::factory('department')->order_by('department')->find_all();

    $employees->employees = $this->widget_load($this->widgets_folder.'governance');
    $employees->personnel_info = $this->widget_load($this->widgets_folder.'personnelinfo/governance');*/

		$employees->dir_docs_employees = ORM::factory('setting', array('key' => 'dir_docs_employees'))->value;

    $this->template->main = $employees;
  }
}
