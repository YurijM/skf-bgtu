<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Degrees extends Controller_Admin {
  private $page_title = 'Учёные степени';
  private $table;
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('degree')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $degrees = View::factory('admin/v_degrees_list');
    $degrees->degrees = ORM::factory('degree')->order_by('degree')->find_all();
    $degrees->page_title = $this->page_title;
    $degrees->table = $this->table;
    
    $this->template->main = $degrees;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $degree = View::factory('admin/v_degree');
    $degree->page_title = $this->page_title;
    $degree->table = $this->table;

    if ($id)
    {
      $degree->degree = ORM::factory('degree', $id);
      $degree->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.str_replace(',', '', $degree->degree->degree));
    }
    else
    {
      $degree->degree = ORM::factory('degree');
    }

    $this->template->main = $degree;
  }

  //==========================================================================//
  public function action_save()
  {
    $id = Arr::get($_POST, 'id');
    if ($id > 0)
    {
      $degree = ORM::factory('degree', $id);
      if (isset($_POST['delete']))
      {
        $degree->delete();
        $this->request->redirect('admin/degrees');
      }
    }
    else
    {
      $degree = ORM::factory('degree');
    }
    
    $degree->degree = trim(str_replace('.', '', Arr::get($_POST, 'degree')));
    $degree->short = trim(Arr::get($_POST, 'short'));

    $degree->save();
    
    $this->request->redirect('admin/degrees');
  }
}
