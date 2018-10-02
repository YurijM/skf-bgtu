<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Governance extends Controller_Admin {
  private $page_title = 'Руководство';
  private $table;
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('governance')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $governance = View::factory('admin/v_governance_list');
    $governance->governance = ORM::factory('governance')->order_by('order_no')->find_all();
    $governance->page_title = $this->page_title;
    $governance->table = $this->table;
    
    $this->template->main = $governance;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $governance = View::factory('admin/v_governance');
    $governance->page_title = $this->page_title;
    $governance->table = $this->table;
    $governance->dir_img_personnel = ORM::factory('setting', array('key' => 'dir_img_personnel'))->value;
    $governance->personnel = ORM::factory('personnel')->where('fired', '=', 0)->order_by('family')->order_by('name')->order_by('patronymic')->find_all()->as_array();

    if ($id)
    {
      $governance->governance = ORM::factory('governance', $id);
      $governance->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.str_replace(['.', ','], ' ', $governance->governance->post));
    }
    else
    {
      $governance->governance = ORM::factory('governance');
    }

    $this->template->main = $governance;
  }

  //==========================================================================//
  public function action_save()
  {
    $id = Arr::get($_POST, 'id');
    if ($id > 0)
    {
      $governance = ORM::factory('governance', $id);
      if (isset($_POST['delete']))
      {
        $governance->delete();
        $this->request->redirect('admin/governance');
      }
    }
    else
    {
      $governance = ORM::factory('governance');
    }
    
    $personnel = Arr::get($_POST, 'personnel');
    $governance->personnel_id = ($personnel == 0 ? NULL : $personnel);
    $governance->post = trim(Arr::get($_POST, 'post'));
    $governance->phone = trim(Arr::get($_POST, 'phone'));
    $governance->email = trim(Arr::get($_POST, 'email'));
    $governance->order_no = Arr::get($_POST, 'order_no');

    $governance->save();
    
    $this->request->redirect('admin/governance');
  }
}
