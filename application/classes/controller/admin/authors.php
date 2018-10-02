<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Authors extends Controller_Admin {
  private $page_title = 'Авторы статей';
  private $table;
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('article')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $authors = View::factory('admin/v_authors_list');
    $authors->authors = ORM::factory('author')->order_by('author')->find_all();
    $authors->page_title = $this->page_title;
    $authors->table = $this->table;
    
    $this->template->main = $authors;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $author = View::factory('admin/v_author');
    $author->page_title = $this->page_title;
    $author->table = $this->table;

    if ($id)
    {
      $author->author = ORM::factory('author', $id);
      $author->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.$author->author);
    }
    else
    {
      $author->author = ORM::factory('author');
    }

    $this->template->main = $author;
  }

  //==========================================================================//
  public function action_save()
  {
    $id = Arr::get($_POST, 'id');
    if ($id > 0)
    {
      $author = ORM::factory('author', $id);
      if (isset($_POST['delete']))
      {
        $author->delete();
        $this->request->redirect('admin/authors');
      }
    }
    else
    {
      $author = ORM::factory('author');
    }
    
    $author->author = trim(Arr::get($_POST, 'author'));

    $author->save();
    
    $this->request->redirect('admin/authors');
  }
}
