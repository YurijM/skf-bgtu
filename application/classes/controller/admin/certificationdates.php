<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Certificationdates extends Controller_Admin {
  private $page_title = 'Сроки аттестации студентов';
	private $table;

  //==========================================================================//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
		$this->table = ORM::factory('certificationdates')->table_name();
  }
  
  //==========================================================================//
  public function action_index()
  {
		$certification_dates = View::factory('admin/v_certification_dates_list');
    $certification_dates->dates = ORM::factory('certificationdates')->find();
		$certification_dates->page_title = $this->page_title;
		$certification_dates->table = $this->table;

    $this->template->main = $certification_dates;
  }

  //==========================================================================//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $certification_dates = View::factory('admin/v_certification_dates');
    $certification_dates->page_title = $this->page_title;
		$certification_dates->dir_css = $this->dir_css;
		$certification_dates->dir_js = $this->dir_js;

		$certification_dates->dates = ORM::factory('certificationdates', $id);
		$certification_dates->site_name = ORM::factory('setting', array('key' => 'site_name'))->value;
		$certification_dates->table = $this->table;

    $this->template->main = $certification_dates;
  }

  //==========================================================================//
  public function action_save()
  {
    $id = Arr::get($_POST, 'id');

		$dates = ORM::factory('certificationdates', $id);

    $dates->begin_first = Helper_Addfunction::date_to_mysql(Arr::get($_POST, 'begin_first'));
		$dates->end_first = Helper_Addfunction::date_to_mysql(Arr::get($_POST, 'end_first'));
		$dates->begin_second = Helper_Addfunction::date_to_mysql(Arr::get($_POST, 'begin_second'));
		$dates->end_second = Helper_Addfunction::date_to_mysql(Arr::get($_POST, 'end_second'));

    $dates->save();

    $this->request->redirect('admin/certificationdates');
  }
}
