<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Validation extends Controller_Base {
  //==========================================================================//
	public function action_index()
  {
    $this->template->page_title = 'Аттестация руководителей и специалистов';
    $this->template->keywords = 'Аттестация руководителей и специалистов, Минеральные Воды, Ставропольский край, СКФ БГТУ им.В.Г.Шухова';
    $this->template->description = 'В нашем филиале Вы можете пройти компьютерное тестирование в Единой Системе Аттестации НОСТРОЙ. Результаты оценки уровня знаний предоставляются в соответствующие аттестационные комиссии СРО';

    $validation = View::factory('v_validation');

    $validation->mode = $this->mode;
    $validation->page_title = $this->template->page_title;

    $validation->site_name = ORM::factory('setting', array('key' => 'site_name'))->value;
    $validation->dir_docs_validation = ORM::factory('setting', array('key' => 'dir_docs_validation'))->value;
    $validation->dir_img_docs = ORM::factory('setting', array('key' => 'dir_img_docs'))->value;
    $validation->dir_docs = ORM::factory('setting', array('key' => 'dir_docs'))->value;
    $validation->phone = ORM::factory('setting', array('key' => 'phone_kpk'))->value;
    $validation->email = ORM::factory('setting', array('key' => 'email_kpk'))->value;

    $this->template->main = $validation;
  }
}
