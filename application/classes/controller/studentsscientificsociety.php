<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Studentsscientificsociety extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Студенческое научное общество';

    $sss = View::factory('v_students_scientific_society');
    
    $sss->mode = $this->mode;
    $sss->page_title = $this->template->page_title;
    $sss->dir_docs = ORM::factory('setting', array('key' => 'dir_docs'))->value;

    $sss->news = $this->widget_load($this->widgets_folder.'newsbycategory/index/2');

    $this->template->main = $sss;
  }

  //==========================================================================//
  public function action_conferences()
  {
    $this->template->page_title = 'Студенческие конференции';
    
    $conferences = View::factory('v_student_conferences');
    $conferences->mode = $this->mode;
    $conferences->page_title = $this->template->page_title;
    $conferences->conferences = ORM::factory('studentconference')->with('organizer')->order_by('date', 'DESC')->order_by('conference')->find_all();

    $this->template->main = $conferences;
  }
}
