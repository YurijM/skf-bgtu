<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Publicationscompany extends Controller_Base {
	public function action_index()
  {
    $page = $this->request->param('page');
    if (! $page)
    {
      $page = 1;
    }
    
    $this->template->page_title = 'Наши издания для предприятий';
    $this->template->keywords = 'издания для предприятий, Минеральные Воды, Ставропольский край, СКФ БГТУ им.В.Г.Шухова';
    $this->template->description = 'Северо-Кавказский филиал ГОУ ВПО БГТУ им.В.Г.Шухова предлагает к реализации изданные труды наших сотрудников. По вопросам приобретения обращаться по телефонам (87922) 5-53-97, 5-63-87';

    $count_for_page = ORM::factory('setting', array('key' => 'count_publications_for_page'))->value;

    $publications = View::factory('v_publications_company');
    
    $publications->mode = $this->mode;
    $publications->page_title = $this->template->page_title;
    $publications->page = $page;

    $publications->site_name = ORM::factory('setting', array('key' => 'site_name'))->value;
    $publications->dir_img_publications = ORM::factory('setting', array('key' => 'dir_img_publications'))->value;
    $publications->dir_docs_publications = ORM::factory('setting', array('key' => 'dir_docs_publications'))->value;

    $publications->publications = ORM::factory('publication')->where('for_company', '=', 1)->order_by('year', 'DESC')->order_by('title')->limit($count_for_page)->offset(($page - 1) * $count_for_page)->find_all();
    $count_pages = ceil(ORM::factory('publication')->where('for_company', '=', 1)->count_all() / $count_for_page);
    $publications->pagination = $this->widget_load($this->widgets_folder.'pagination/'.$count_pages.'/'.$page.'/@publicationscompany@');

    $this->template->main = $publications;
  }
}
