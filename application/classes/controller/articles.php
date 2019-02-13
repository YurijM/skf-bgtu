<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Articles extends Controller_Base {
  //==========================================================================//
  public function action_index()
  {
    $page = $this->request->param('page');
    if (! $page)
    {
      $page = 1;
    }
    
    // Через параметр type передаётся тип отображаемых статей:
    // отсутствует - все статьи;
    // 1 - студенческие публикации;
    // 0 - статьи написанные преподавателями
    $type = $this->request->param('type');
    
    $this->template->page_title = 'Публикации в периодических изданиях';

    $count_for_page = ORM::factory('setting', array('key' => 'count_articles_for_page'))->value;
    $count_pages = ceil(ORM::factory('article')->where('is_student', ($type == NULL ? '>' : '='), ($type == NULL ? -1 : $type))->count_all() / $count_for_page);

    $articles = View::factory('v_digests_articles');
    
    $articles->mode = $this->mode;
    $articles->page_title = $this->template->page_title;
    $articles->page = $page;
    $articles->type = $type;
    $articles->size_button = ($this->mode == 'normal' ? 'btn-sm' : 'btn-lg');

    $articles->site_name = ORM::factory('setting', array('key' => 'site_name'))->value;
    $articles->dir_img_periodicals = ORM::factory('setting', array('key' => 'dir_img_periodicals'))->value;

    $articles->articles = ORM::factory('article')->with('periodical')->where('is_student', ($type == NULL ? '>' : '='), ($type == NULL ? -1 : $type))->order_by('periodical.year', 'DESC')->order_by('periodical.db')->order_by('periodical.date', 'DESC')->order_by('periodical.periodical')->order_by('article.page_from')->limit($count_for_page)->offset(($page - 1) * $count_for_page)->find_all();
    $articles->pagination = $this->widget_load($this->widgets_folder.'pagination/'.$count_pages.'/'.$page.'/@digests@articles'.($type == NULL ? '' : '@'.$type));

    $this->template->main = $articles;
  }
}
