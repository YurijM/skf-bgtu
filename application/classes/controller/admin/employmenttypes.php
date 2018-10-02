<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Employmenttypes extends Controller_Admin {
  private $page_title = 'Типы занятости';
  private $table;
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('employmenttype')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $employment_types = View::factory('admin/v_employment_types_list');
    $employment_types->employmenttypes = ORM::factory('employmenttype')->order_by('order_no')->find_all();
    $employment_types->page_title = $this->page_title;
    $employment_types->table = $this->table;
    
    $this->template->main = $employment_types;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $employment_type = View::factory('admin/v_employment_type');
    $employment_type->page_title = $this->page_title;
    $employment_type->table = $this->table;

    if ($id)
    {
      $employment_type->employment_type = ORM::factory('employmenttype', $id);
      $employment_type->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.str_replace(',', '', $employment_type->employment_type->employment_type));
    }
    else
    {
      $employment_type->employment_type = ORM::factory('employmenttype');
    }

    $this->template->main = $employment_type;
  }

  //==========================================================================//
  public function action_save()
  {
    $id = Arr::get($_POST, 'id');
    if ($id > 0)
    {
      $employment_type = ORM::factory('employmenttype', $id);
      if (isset($_POST['delete']))
      {
        $employment_type->delete();
        $this->request->redirect('admin/employmenttypes');
      }
    }
    else
    {
      $employment_type = ORM::factory('employmenttype');
    }
    
    $employment_type->employment_type = trim(str_replace('.', '', Arr::get($_POST, 'employment_type')));
    $employment_type->plural = trim(str_replace('.', '', Arr::get($_POST, 'plural')));
    $employment_type->order_no = Arr::get($_POST, 'order_no');

    $employment_type->save();
    
    $this->request->redirect('admin/employmenttypes');
  }
}
