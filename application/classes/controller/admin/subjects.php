<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Subjects extends Controller_Admin {
  private $page_title = 'Предметы';
  private $table;
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('subject')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $subjects = View::factory('admin/v_subjects_list');
    $subjects->subjects = ORM::factory('subject')->order_by('subject')->find_all();
    $subjects->page_title = $this->page_title;
    $subjects->table = $this->table;
    
    $this->template->main = $subjects;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $subject = View::factory('admin/v_subject');
    $subject->page_title = $this->page_title;
    $subject->table = $this->table;

    if ($id)
    {
      $subject->subject = ORM::factory('subject', $id);
      $subject->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.$subject->subject->subject);
    }
    else
    {
      $subject->subject = ORM::factory('subject');
    }

    $this->template->main = $subject;
  }

  //==========================================================================//
  public function action_save()
  {
    $id = Arr::get($_POST, 'id');
    if ($id > 0)
    {
      $subject = ORM::factory('subject', $id);
      if (isset($_POST['delete']))
      {
        $subject->delete();
        $this->request->redirect('admin/subjects');
      }
    }
    else
    {
      $subject = ORM::factory('subject');
    }
    
    $subject->subject = mb_strtolower(trim(str_replace('.', '', Arr::get($_POST, 'subject'))));

    $subject->save();
    
    $this->request->redirect('admin/subjects');
  }
}
