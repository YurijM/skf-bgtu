<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Publications extends Controller_Base {
	public function action_index()
  {
    $page = $this->request->param('page');
    if (! $page)
    {
      $page = 1;
    }
    
    $this->template->page_title = 'Наши издания';

    $count_for_page = ORM::factory('setting', array('key' => 'count_publications_for_page'))->value;
    $count_pages = ceil(ORM::factory('publication')->count_all() / $count_for_page);

    $publications = View::factory('v_publications');
    
    $publications->mode = $this->mode;
    $publications->page_title = $this->template->page_title;
    $publications->page = $page;

    $publications->site_name = ORM::factory('setting', array('key' => 'site_name'))->value;
    $publications->dir_img_publications = ORM::factory('setting', array('key' => 'dir_img_publications'))->value;
    $publications->dir_docs_publications = ORM::factory('setting', array('key' => 'dir_docs_publications'))->value;

    $publications->publications = ORM::factory('publication')->order_by('year', 'DESC')->order_by('title')->limit($count_for_page)->offset(($page - 1) * $count_for_page)->find_all();
    $publications->pagination = $this->widget_load($this->widgets_folder.'pagination/'.$count_pages.'/'.$page.'/@publications@');

    $this->template->main = $publications;
  }
}
