<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Safetyhealth extends Controller_Admin {
  private $page_title = 'Охрана труда и техника безопасности';
  private $table;
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('safetyhealth')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $courses = View::factory('admin/v_safety_health_list');
    $courses->courses = ORM::factory('safetyhealth')->order_by('course')->find_all();
    $courses->page_title = $this->page_title;
    $courses->table = $this->table;
    
    $this->template->main = $courses;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $course = View::factory('admin/v_safety_health');
    $course->page_title = $this->page_title;
    $course->table = $this->table;
    
    if ($id)
    {
      $course->course = ORM::factory('safetyhealth', $id);
      $course->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.str_replace(['.', ','], '', $course->course->course));
    }
    else
    {
      $course->course = ORM::factory('safetyhealth');
    }

    $this->template->main = $course;
  }

  //==========================================================================//
  public function action_save()
  {
    $id = Arr::get($_POST, 'id');
    if ($id > 0)
    {
      $course = ORM::factory('safetyhealth', $id);
      if (isset($_POST['delete']))
      {
        $course->delete();
        $this->request->redirect('admin/safetyhealth');
      }
    }
    else
    {
      $course = ORM::factory('safetyhealth');
    }
    
    $course->course = trim(Arr::get($_POST, 'course'));
    $course->listener_category = trim(Arr::get($_POST, 'listener_category'));
    $course->program = trim(Arr::get($_POST, 'program'));
    $course->hours = Arr::get($_POST, 'hours');

    $course->save();
    
    $this->request->redirect('admin/safetyhealth');
  }
}
