<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Menu extends Controller_Admin {
  private $page_title = 'Учёные звания';
  private $table;
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('menuadmin')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $menu = View::factory('admin/v_menu_list');
    $menu->menu = ORM::factory('menuadmin')->order_by('item')->find_all();
    $menu->page_title = $this->page_title;
    $menu->table = $this->table;
    
    $this->template->main = $menu;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $menu = View::factory('admin/v_menu');
    $menu->page_title = $this->page_title;
    $menu->table = $this->table;

    if ($id)
    {
      $menu->menu = ORM::factory('menuadmin', $id);
      $menu->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.str_replace(',', '', $menu->menu->item));
    }
    else
    {
      $menu->menu = ORM::factory('menuadmin');
    }

    $this->template->main = $menu;
  }

  //==========================================================================//
  public function action_save()
  {
    $id = Arr::get($_POST, 'id');
    if ($id > 0)
    {
      $menu = ORM::factory('menuadmin', $id);
      if (isset($_POST['delete']))
      {
        $menu->delete();
        $this->request->redirect('admin/menu');
      }
    }
    else
    {
      $menu = ORM::factory('menuadmin');
    }
    
    $menu->item = trim(str_replace('.', ' ', Arr::get($_POST, 'item')));
    $menu->controller = trim( Arr::get($_POST, 'controller'));

    $menu->save();
    
    $this->request->redirect('admin/menu');
  }
}
