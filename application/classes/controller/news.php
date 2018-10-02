<?php defined('SYSPATH') or die('No direct script access.');

class Controller_News extends Controller_Base {
  //==========================================================================//
	public function action_index()
  {
    $page = $this->request->param('page');
    if (! $page)
    {
      $page = 1;
    }
    
    $id = $this->request->param('id');

    // Конкретная новость
    if ($id)
    {
      $news = View::factory('v_news');
      $news->news = ORM::factory('news', $id);
      //$news->galery = $news->news->galery->order_by('photo')->find_all();
      $news->galery = $news->news->galery->order_by('id')->find_all();

      $this->template->page_title = $news->news->title;
    }
    // Конкретная страница с новостями
    else
    {
      $count_news_for_page = ORM::factory('setting', array('key' => 'count_news_for_page'))->value;
      $count_pages = ceil(ORM::factory('news')->count_all() / $count_news_for_page);

      $news = View::factory('v_news_list');
      $news->news = ORM::factory('news')->order_by('date', 'DESC')->limit($count_news_for_page)->offset(($page - 1) * $count_news_for_page)->find_all();
      $news->pagination = $this->widget_load($this->widgets_folder.'pagination/'.$count_pages.'/'.$page.'/@news@');

      $this->template->page_title = 'Новости';
    }

    $news->mode = $this->mode;
    $news->site_name = ORM::factory('setting', array('key' => 'site_name'))->value;
    $news->dir_css = ORM::factory('setting', array('key' => 'dir_css'))->value;
    $news->dir_js = ORM::factory('setting', array('key' => 'dir_js'))->value;
    $news->dir_img_news = ORM::factory('setting', array('key' => 'dir_img_news'))->value;
    $news->page_title = $this->template->page_title;
    $news->page = $page;
    $news->id = $id;

    $this->template->main = $news;
  }
  
  //==========================================================================//
	public function action_video()
  {
    $this->template->page_title = 'Видеогалерея';

    $video = View::factory('v_news_video');
    $video->mode = $this->mode;
    $video->page_title = $this->template->page_title;

    $video->videogallery = ORM::factory('videogallery')->order_by('date', 'DESC')->find_all();

    $this->template->main = $video;
  }
}
