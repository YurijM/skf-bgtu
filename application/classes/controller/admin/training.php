<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Training extends Controller_Admin {
  private $page_title = 'Курсы повышения квалификации';
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('training')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $training = View::factory('admin/v_training_list');
    $training->training = ORM::factory('training')->order_by('course')->find_all();
    $training->page_title = $this->page_title;
    $training->table = $this->table;

    $this->template->main = $training;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $training = View::factory('admin/v_training');
    
    $training->page_title = $this->page_title;
    $training->table = $this->table;
    $training->dir_js = $this->dir_js;

    if ($id)
    {
      $training->training = ORM::factory('training', $id);
      $training->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.str_replace([',', '.'], ' ', $training->training->course));
    }
    else
    {
      $training->training = ORM::factory('training');
    }

    $this->template->main = $training;
  }

  //==========================================================================//
  public function action_save()
  {
    $id = Arr::get($_POST, 'id');
    if ($id > 0)
    {
      $training = ORM::factory('training', $id);
      if (isset($_POST['delete']))
      {
        $training->delete();
        
        $this->request->redirect('admin/training');
      }
    }
    else
    {
      $training = ORM::factory('training');
    }
    
    $training->course = trim(Arr::get($_POST, 'course'));
    $training->listeners_categories = trim(Arr::get($_POST, 'listeners_categories'));
    $training->hours_amount = trim(Arr::get($_POST, 'hours_amount'));
    $training->cost = Arr::get($_POST, 'cost');
    $training->description = trim(Arr::get($_POST, 'description'));

    $training->save();
      
    $this->request->redirect('admin/training');
  }
}
