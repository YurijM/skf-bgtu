<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Videogallery extends Controller_Admin {
  private $page_title = 'Видеогалерея';
  private $table;
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('videogallery')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $videogallery = View::factory('admin/v_videogallery_list');
    $videogallery->page_title = $this->page_title;
    $videogallery->table = $this->table;

    $videogallery->videogallery = ORM::factory('videogallery')->order_by('date', 'DESC')->find_all();
    
    $this->template->main = $videogallery;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $videogallery = View::factory('admin/v_videogallery');
    $videogallery->page_title = $this->page_title;
    $videogallery->table = $this->table;
    $videogallery->dir_css = $this->dir_css;
    $videogallery->dir_js = $this->dir_js;
    
    if ($id)
    {
      $videogallery->videogallery = ORM::factory('videogallery', $id);
      $videogallery->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.str_replace(['.', ','], ' ', $videogallery->videogallery->title));
    }
    else
    {
      $videogallery->videogallery = ORM::factory('videogallery');
    }

    $this->template->main = $videogallery;
  }

  //==========================================================================//
  public function action_save()
  {
    $id = Arr::get($_POST, 'id');
    if ($id > 0)
    {
      $videogallery = ORM::factory('videogallery', $id);
      if (isset($_POST['delete']))
      {
        $videogallery->delete();
        $this->request->redirect('admin/videogallery');
      }
    }
    else
    {
      $videogallery = ORM::factory('videogallery');
    }
    
    $videogallery->date = Helper_Addfunction::date_to_mysql(Arr::get($_POST, 'date'));
    $videogallery->source = trim(Arr::get($_POST, 'source'));
    $videogallery->title = trim(Arr::get($_POST, 'title'));

    $videogallery->save();
    
    $this->request->redirect('admin/videogallery');
  }
}
