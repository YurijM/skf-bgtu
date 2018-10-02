<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Posts extends Controller_Admin {
  private $page_title = 'Должности';
  private $table;
  
  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
    $this->table = ORM::factory('post')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
    $posts = View::factory('admin/v_posts_list');
    $posts->posts = ORM::factory('post')->order_by('post')->find_all();
    $posts->page_title = $this->page_title;
    $posts->table = $this->table;
    
    $this->template->main = $posts;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $post = View::factory('admin/v_post');
    $post->page_title = $this->page_title;
    $post->table = $this->table;

    if ($id)
    {
      $post->post = ORM::factory('post', $id);
      $post->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.str_replace(',', '', $post->post->post));
    }
    else
    {
      $post->post = ORM::factory('post');
    }

    $this->template->main = $post;
  }

  //==========================================================================//
  public function action_save()
  {
    $id = Arr::get($_POST, 'id');
    if ($id > 0)
    {
      $post = ORM::factory('post', $id);
      if (isset($_POST['delete']))
      {
        $post->delete();
        $this->request->redirect('admin/posts');
      }
    }
    else
    {
      $post = ORM::factory('post');
    }
    
    $post->post = trim(str_replace('.', '', Arr::get($_POST, 'post')));

    $post->save();
    
    $this->request->redirect('admin/posts');
  }
}
