<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Patents extends Controller_Base {
  public $count_for_page;
  public $site_name;
  public $dir_docs_patents;
  public $dir_img_patents;

  public function before()
  {
    parent::before();

    $this->count_for_page = ORM::factory('setting', array('key' => 'count_patents_for_page'))->value;
    $this->site_name = ORM::factory('setting', array('key' => 'site_name'))->value;
    $this->dir_docs_patents = ORM::factory('setting', array('key' => 'dir_docs_patents'))->value;
    $this->dir_img_patents = ORM::factory('setting', array('key' => 'dir_img_patents'))->value;
  }

	public function action_index()
  {
    $page = $this->request->param('page');
    if (! $page)
    {
      $page = 1;
    }
    
    $this->template->page_title = 'Патенты';

    $count_pages = ceil(ORM::factory('patent')->where('is_patent', '=', 1)->count_all() / $this->count_for_page);

    $patents = View::factory('v_patents');
    
    $patents->mode = $this->mode;
    $patents->page_title = $this->template->page_title;
    $patents->page = $page;

    $patents->site_name = $this->site_name;
    $patents->dir_docs_patents = $this->dir_docs_patents;
    $patents->dir_img_patents = $this->dir_img_patents;

    $patents->link_url = '/patents/models';
    $patents->link_title = '(Полезные модели)';

    $patents->patents = ORM::factory('patent')->where('is_patent', '=', 1)->order_by('date', 'DESC')->limit
  ($this->count_for_page)->offset(($page - 1) * $this->count_for_page)->find_all();
    $patents->pagination = $this->widget_load($this->widgets_folder.'pagination/'.$count_pages.'/'.$page.'/@patents@');

    $this->template->main = $patents;
  }

  public function action_models()
  {
    $page = $this->request->param('id');
    if (! $page)
    {
      $page = 1;
    }

    $this->template->page_title = 'Полезные модели';

    $count_pages = ceil(ORM::factory('patent')->where('is_patent', '=', 0)->count_all() / $this->count_for_page);

    $patents = View::factory('v_patents');

    $patents->mode = $this->mode;
    $patents->page_title = $this->template->page_title;
    $patents->page = $page;

    $patents->site_name = $this->site_name;
    $patents->dir_docs_patents = $this->dir_docs_patents;
    $patents->dir_img_patents = $this->dir_img_patents;

    $patents->link_url = '/patents';
    $patents->link_title = '(Патенты)';

    $patents->patents = ORM::factory('patent')->where('is_patent', '=', 0)->order_by('date', 'DESC')->limit
    ($this->count_for_page)->offset(($page - 1) * $this->count_for_page)->find_all();
    $patents->pagination = $this->widget_load($this->widgets_folder.'pagination/'.$count_pages.'/'.$page
      .'/@patents@models@');

    $this->template->main = $patents;
  }
}
