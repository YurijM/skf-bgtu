<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Departments extends Controller_Base {
	public function action_department()
  {
    $this->template->page_title = 'Руководство. Педагогический состав';

    $departments = View::factory('v_departments');
    $departments->mode = $this->mode;
    $departments->page_title = $this->template->page_title;

    $departments->id = $this->request->param('id');
    $departments->departments = ORM::factory('department')->order_by('department')->find_all();

    $departments->personnel = $this->widget_load($this->widgets_folder.'department/index/'.$departments->id);
    $departments->personnel_info = $this->widget_load($this->widgets_folder.'personnelinfo/department/'
      .$departments->id);

    $this->template->main = $departments;
  }
}
