<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Kpkspecialists extends Controller_Admin {
  private $page_title = 'КПК для специалистов';
  private $table;
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('kpkspecialist')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $courses = View::factory('admin/v_kpk_specialists_list');
    $courses->courses = ORM::factory('kpkspecialist')->order_by('course')->find_all();
    $courses->page_title = $this->page_title;
    $courses->table = $this->table;
    
    $this->template->main = $courses;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $course = View::factory('admin/v_kpk_specialist');
    $course->page_title = $this->page_title;
    $course->table = $this->table;
    
    if ($id)
    {
      $course->course = ORM::factory('kpkspecialist', $id);
      $course->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.str_replace(['.', ','], '', $course->course->course));
    }
    else
    {
      $course->course = ORM::factory('kpkspecialist');
    }

    $this->template->main = $course;
  }

  //==========================================================================//
  public function action_save()
  {
    $id = Arr::get($_POST, 'id');
    if ($id > 0)
    {
      $course = ORM::factory('kpkspecialist', $id);
      if (isset($_POST['delete']))
      {
        $course->delete();
        $this->request->redirect('admin/kpkspecialists');
      }
    }
    else
    {
      $course = ORM::factory('kpkspecialist');
    }
    
    $course->course = trim(Arr::get($_POST, 'course'));
    $course->listener_category = trim(Arr::get($_POST, 'listener_category'));
    $course->program = trim(Arr::get($_POST, 'program'));
    $course->hours = Arr::get($_POST, 'hours');
    $course->cost = Arr::get($_POST, 'cost');

    $course->save();
    
    $this->request->redirect('admin/kpkspecialists');
  }
}
