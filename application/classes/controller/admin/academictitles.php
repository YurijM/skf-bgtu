<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Academictitles extends Controller_Admin {
  private $page_title = 'Учёные звания';
  private $table;
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('academictitle')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $academic_titles = View::factory('admin/v_academic_titles_list');
    $academic_titles->academictitles = ORM::factory('academictitle')->order_by('academic_title')->find_all();
    $academic_titles->page_title = $this->page_title;
    $academic_titles->table = $this->table;
    
    $this->template->main = $academic_titles;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $academic_title = View::factory('admin/v_academic_title');
    $academic_title->page_title = $this->page_title;
    $academic_title->table = $this->table;

    if ($id)
    {
      $academic_title->academic_title = ORM::factory('academictitle', $id);
      $academic_title->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.str_replace(',', '', $academic_title->academic_title->academic_title));
    }
    else
    {
      $academic_title->academic_title = ORM::factory('academictitle');
    }

    $this->template->main = $academic_title;
  }

  //==========================================================================//
  public function action_save()
  {
    $id = Arr::get($_POST, 'id');
    if ($id > 0)
    {
      $academic_title = ORM::factory('academictitle', $id);
      if (isset($_POST['delete']))
      {
        $academic_title->delete();
        $this->request->redirect('admin/academictitles');
      }
    }
    else
    {
      $academic_title = ORM::factory('academictitle');
    }
    
    $academic_title->academic_title = trim(str_replace('.', '', Arr::get($_POST, 'academic_title')));

    $academic_title->save();
    
    $this->request->redirect('admin/academictitles');
  }
}
