<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Depot extends Controller_Admin {
  private $page_title = 'Учебная часть';
  private $table;
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('depot')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $depot = View::factory('admin/v_depot_list');
    $depot->depot = ORM::factory('depot')->order_by('order_no')->find_all();
    $depot->page_title = $this->page_title;
    $depot->table = $this->table;
    
    $this->template->main = $depot;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $depot = View::factory('admin/v_depot');
    $depot->page_title = $this->page_title;
    $depot->table = $this->table;

    if ($id)
    {
      $depot->depot = ORM::factory('depot', $id);
      $depot->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.str_replace(',', '', $depot->depot->post));
    }
    else
    {
      $depot->depot = ORM::factory('depot');
    }

    $this->template->main = $depot;
  }

  //==========================================================================//
  public function action_save()
  {
    $id = Arr::get($_POST, 'id');
    if ($id > 0)
    {
      $depot = ORM::factory('depot', $id);
      if (isset($_POST['delete']))
      {
        $depot->delete();
        $this->request->redirect('admin/depot');
      }
    }
    else
    {
      $depot = ORM::factory('depot');
    }
    
    $depot->post = trim(str_replace('.', '', Arr::get($_POST, 'post')));
    $depot->person = trim(str_replace('.', '', Arr::get($_POST, 'person')));
    $depot->order_no = Arr::get($_POST, 'order_no');

    $depot->save();
    
    $this->request->redirect('admin/depot');
  }
}
