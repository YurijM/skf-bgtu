<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Laboratoryservices extends Controller_Base {
  //==========================================================================//
	public function action_index()
  {
    $this->template->page_title = 'Услуги лаборатории строительных материалов';
    $this->template->keywords = 'Услуги лаборатории строительных материалов, Минеральные Воды, Ставропольский край, СКФ БГТУ им.В.Г.Шухова';
    $this->template->description = 'Строительная лаборатория СКФ БГТУ им.В.Г.Шухова оснащена современным оборудованием и имеет в своем коллективе высококвалифицированных специалистов, имеющих ученые степени докторов технических наук и кандидатов технических наук, и инженеров, обладающих большим опытом работы в данной сфере';

    $services = View::factory('v_laboratory_services');

    $services->mode = $this->mode;
    $services->page_title = $this->template->page_title;

    $services->site_name = ORM::factory('setting', array('key' => 'site_name'))->value;
    //$services->dir_img_docs = ORM::factory('setting', array('key' => 'dir_img_docs'))->value;
    $services->dir_docs_docs = ORM::factory('setting', array('key' => 'dir_docs_docs'))->value;
    $services->dir_img_equipment = ORM::factory('setting', array('key' => 'dir_img_equipment'))->value;
    
    $services->equipment = ORM::factory('equipment')->order_by('description')->find_all();

    $this->template->main = $services;
  }
}
