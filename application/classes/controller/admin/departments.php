<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Departments extends Controller_Admin {
  private $page_title = 'Кафедры';
  private $table;
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('department')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $departments = View::factory('admin/v_departments_list');
    $departments->departments = ORM::factory('department')->order_by('department')->find_all();
    $departments->page_title = $this->page_title;
    $departments->table = $this->table;
    
    $this->template->main = $departments;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $departments = View::factory('admin/v_department');
    $departments->page_title = $this->page_title;
    $departments->table = $this->table;
    $departments->dir_img = ORM::factory('setting', array('key' => 'dir_img'))->value;
    $departments->dir_img_personnel = ORM::factory('setting', array('key' => 'dir_img_personnel'))->value;
    //$departments->personnel = ORM::factory('personnel')->where('fired', '=', 0)->and_where('department_id', '=', $id)->order_by('family')->order_by('name')->order_by('patronymic')->find_all()->as_array();
    $departments->personnel = ORM::factory('personnel')->where('fired', '=', 0)->order_by('family')->order_by('name')->order_by('patronymic')->find_all()->as_array();

    if ($id)
    {
      $departments->department = ORM::factory('department', $id);
      $departments->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.str_replace(',', '', $departments->department->department));
    }
    else
    {
      $departments->department = ORM::factory('department');
    }

    $this->template->main = $departments;
  }

  //==========================================================================//
  public function action_save()
  {
    $id = Arr::get($_POST, 'id');
    if ($id > 0)
    {
      $departments = ORM::factory('department', $id);
      if (isset($_POST['delete']))
      {
        $departments->delete();
        $this->request->redirect('admin/departments');
      }
    }
    else
    {
      $departments = ORM::factory('department');
    }
    
    $departments->department = trim(str_replace('.', '', Arr::get($_POST, 'department')));
    $head = Arr::get($_POST, 'head');
    $departments->head_personnel_id = ($head == 0 ? NULL : $head);

    $departments->save();
    
    $this->request->redirect('admin/departments');
  }
}
