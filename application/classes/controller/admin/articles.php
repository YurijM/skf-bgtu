<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Articles extends Controller_Admin {
  private $page_title = 'Публикации';
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
    $page = $this->request->param('page');

    if (! $page)
    {
      $page = 1;
    }

    $count_articles_for_page = ORM::factory('setting', array('key' => 'admin_count_articles_for_page'))->value;
    $count_pages = ceil(ORM::factory('article')->count_all() / $count_articles_for_page);
      
    $articles = View::factory('admin/v_articles_list');
    $articles->articles = ORM::factory('article')->with('periodical')->order_by('periodical.year', 'DESC')->order_by('periodical.db')->order_by('periodical.date', 'DESC')->order_by('periodical.periodical')->order_by('article.page_from')->limit($count_articles_for_page)->offset(($page - 1) * $count_articles_for_page)->find_all();
    $articles->pagination = $this->widget_load($this->widgets_folder.'pagination/'.$count_pages.'/'.$page.'/admin@articles@');
    $articles->page = $page;
    $articles->count_articles_for_page = $count_articles_for_page;
    $articles->page_title = $this->page_title;
    $articles->table = $this->table;
    
    $this->template->main = $articles;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $article = View::factory('admin/v_article');
    $article->page = $this->request->param('page');
    $article->page_title = $this->page_title;
    $article->table = $this->table;
    $article->periodicals = ORM::factory('periodical')->order_by('year', 'DESC')->order_by('db')->order_by('date', 'DESC')->order_by('periodical')->find_all()->as_array();
    $article->authors = ORM::factory('author')->order_by('author')->find_all()->as_array();
    
    if ($id)
    {
      $article->article = ORM::factory('article', $id);
      $article->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.str_replace(['.', ','], '', $article->article->article));
    }
    else
    {
      $article->article = ORM::factory('article');
    }

    $this->template->main = $article;
  }

  //==========================================================================//
  public function action_save()
  {
    $id = Arr::get($_POST, 'id');
    
    if ($id > 0)
    {
      $article = ORM::factory('article', $id);
      if (isset($_POST['delete']))
      {
        $this->delete_authors($article);
        $article->delete();

        $count_articles_for_page = ORM::factory('setting', array('key' => 'admin_count_articles_for_page'))->value;
        $count_pages = ceil(ORM::factory('article')->count_all() / $count_articles_for_page);
        $page = $this->request->param('page');

        $this->request->redirect('admin/articles/'.($page > $count_pages ? $count_pages : $page));
      }
    }
    else
    {
      $article = ORM::factory('article');
    }
    
    $periodical = Arr::get($_POST, 'periodical');
    $article->periodical_id = ($periodical == 0 ? NULL : $periodical);
    $title = Arr::get($_POST, 'article');
    $article->article = ($title == '' ? 'Без названия' : $title);
    $article->page_from = Arr::get($_POST, 'page_from');
    $article->page_to = Arr::get($_POST, 'page_to');
    if (Arr::get($_POST, 'is_student') == 1)
    {
      $article->is_student = 1;
    }
    else
    {
      $article->is_student = 0;
    }

    $article->save();
    
    // Для записи в таблицу articles_authors нужно, чтобы запись в таблице articles уже существовала.
    // Поэтому сначала сохраняем изменения в таблице articles, а уже потом добавляем запись в таблицу articles_authors.
    $author = Arr::get($_POST, 'author');
    if ($author > 0)
    {
      $article->add('authors', $author);
    }

    $this->request->redirect('admin/articles/'.$this->search_page($article->id));
  }

  //==========================================================================//
  public function action_deleteauthor()
  {
    $page = $this->request->param('page');
    $article_id = $this->request->param('article_id');
    $author_id = $this->request->param('author_id');
    
    $article = ORM::factory('article', $article_id);
    $article->remove('authors', $author_id);
      
    $this->request->redirect('admin/articles/edit/'.$article_id.'/'.$page);
  }
  
  //==========================================================================//
  private function delete_authors($article)
  {
    $authors = $article->authors->find_all();
    foreach ($authors as $author)
    {
      $article->remove('authors', $author->id);
    }
  }
  
  //==========================================================================//
  private function search_page($id)
  {
    $articles = ORM::factory('article')->with('periodical')->order_by('periodical.year', 'DESC')->order_by('periodical.db')->order_by('periodical.date', 'DESC')->order_by('periodical.periodical')->order_by('article.page_from')->find_all();
    
    $n = 1;
    foreach ($articles as $article)
    {
      if ($article->id == $id)
      {
        break;
      }
      $n++;
    }

    $count_articles_for_page = ORM::factory('setting', array('key' => 'admin_count_articles_for_page'))->value;
    
    return ceil($n / $count_articles_for_page);
  }
}
