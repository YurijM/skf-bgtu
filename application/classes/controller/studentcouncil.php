<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Studentcouncil extends Controller_Base {
  //==========================================================================//
	public function action_index()
  {
    $this->template->page_title = 'Студенческий совет';

    $student_council = View::factory('v_student_council');

    $student_council->mode = $this->mode;
    $student_council->page_title = $this->template->page_title;
    
    $student_council->dir_img_student_council = ORM::factory('setting', array('key' => 'dir_img_student_council'))->value;
    
    //$student_council->depot = ORM::factory('studentcouncil')->order_by('order_no')->find_all();
    $student_council->news = $this->widget_load($this->widgets_folder.'newsbycategory/index/1');

    $this->template->main = $student_council;
  }

  //==========================================================================//
	public function action_structure()
  {
    $this->template->page_title = 'Состав студенческого совета';

    $student_council = View::factory('v_student_council_structure');

    $student_council->mode = $this->mode;
    $student_council->page_title = $this->template->page_title;
    
    $student_council->dir_img_student_council = ORM::factory('setting', array('key' => 'dir_img_student_council'))->value;
    
    $student_council->structure = ORM::factory('studentcouncil')->order_by('order_no')->find_all();

    $this->template->main = $student_council;
  }
}
