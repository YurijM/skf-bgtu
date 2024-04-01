<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Refresher extends Controller_Admin {
  private $page_title = 'Курсы повышения квалификации';
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('refresher')->table_name();
		$this->listeners_categories_list = [
			'Безопасность' => 'Безопасность',
			'Информатика' => 'Информатика',
			'Строительство' => 'Строительство',
			'Экономика' => 'Экономика',
		];
  }
  
  //==========================================================================//
  public function action_index()
  {
    $refresher = View::factory('admin/v_refresher_list');
    $refresher->refresher = ORM::factory('refresher')->order_by('course')->find_all();
    $refresher->page_title = $this->page_title;
    $refresher->table = $this->table;
		$refresher->listeners_categories_list = $this->listeners_categories_list;

    $this->template->main = $refresher;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $refresher = View::factory('admin/v_refresher');
    
    $refresher->page_title = $this->page_title;
    $refresher->table = $this->table;
    $refresher->dir_js = $this->dir_js;
		$refresher->listeners_categories_list = $this->listeners_categories_list;

    if ($id)
    {
      $refresher->refresher = ORM::factory('refresher', $id);
      $refresher->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.str_replace([',', '.'], ' ', $refresher->refresher->course));
    }
    else
    {
      $refresher->refresher = ORM::factory('refresher');
    }

    $this->template->main = $refresher;
  }

  //==========================================================================//
  public function action_save()
  {
    $id = Arr::get($_POST, 'id');
    if ($id > 0)
    {
      $refresher = ORM::factory('refresher', $id);
      if (isset($_POST['delete']))
      {
        $refresher->delete();
        
        $this->request->redirect('admin/refresher');
      }
    }
    else
    {
      $refresher = ORM::factory('refresher');
    }
    
    $refresher->course = trim(Arr::get($_POST, 'course'));
    $refresher->listeners_categories = trim(Arr::get($_POST, 'listeners_categories'));
    $refresher->hours_amount = trim(Arr::get($_POST, 'hours_amount'));
    $refresher->cost = Arr::get($_POST, 'cost');
    $refresher->description = trim(Arr::get($_POST, 'description'));

    $refresher->save();
      
    $this->request->redirect('admin/refresher');
  }
}
