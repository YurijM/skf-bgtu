<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Structurepersonnel extends Controller_Admin {
  private $page_title = 'Сотрудники органов управления';
  private $table;
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('structurepersonnel')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $structure_personnel = View::factory('admin/v_structure_personnel_list');
    $structure_personnel->structure_personnel = ORM::factory('structurepersonnel')->with('structure')->order_by
    ('structure.order_no')->order_by
    ('order_no')->find_all();
    $structure_personnel->page_title = $this->page_title;
    $structure_personnel->table = $this->table;
    
    $this->template->main = $structure_personnel;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $structure_personnel = View::factory('admin/v_structure_personnel');
    $structure_personnel->page_title = $this->page_title;
    $structure_personnel->table = $this->table;
    $structure_personnel->dir_img_personnel = ORM::factory('setting', array('key' => 'dir_img_personnel'))->value;
    $structure_personnel->personnel = ORM::factory('personnel')->where('fired', '=', 0)->order_by('family')->order_by('name')->order_by('patronymic')->find_all()->as_array();
    $structure_personnel->structure = ORM::factory('structure')->order_by('structure')->find_all()->as_array();

    if ($id)
    {
      $structure_personnel->structure_personnel = ORM::factory('structurepersonnel', $id);
      $structure_personnel->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.str_replace('.', ' ', $structure_personnel->structure_personnel->post));
    }
    else
    {
      $structure_personnel->structure_personnel = ORM::factory('structurepersonnel');
    }

    $this->template->main = $structure_personnel;
  }

  //==========================================================================//
  public function action_save()
  {
    $id = Arr::get($_POST, 'id');
    if ($id > 0)
    {
      $structure_personnel = ORM::factory('structurepersonnel', $id);
      if (isset($_POST['delete']))
      {
        $structure_personnel->delete();
        $this->request->redirect('admin/structurepersonnel');
      }
    }
    else
    {
      $structure_personnel = ORM::factory('structurepersonnel');
    }
    
    $personnel = Arr::get($_POST, 'personnel');
    $structure_personnel->personnel_id = ($personnel == 0 ? NULL : $personnel);
    $structure_personnel->post =  mb_strtolower(trim(Arr::get($_POST, 'post')));
    $structure = Arr::get($_POST, 'structure');
    $structure_personnel->structure_id = ($structure == 0 ? NULL : $structure);
    $structure_personnel->order_no = Arr::get($_POST, 'order_no');
    $structure_personnel->location = trim(Arr::get($_POST, 'location'));
    $structure_personnel->phone = trim(Arr::get($_POST, 'phone'));
    $structure_personnel->email = trim(Arr::get($_POST, 'email'));

    $structure_personnel->save();
    
    $this->request->redirect('admin/structurepersonnel');
  }
}
