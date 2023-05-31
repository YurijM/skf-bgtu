<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Infolicenseeducation extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Информация по лицензируемым образовательным программам';

    $info = View::factory('v_info_license_education');
    
    $info->mode = $this->mode;
    $info->page_title = $this->template->page_title;
    $info->dir_docs_education = ORM::factory('setting', array('key' => 'dir_docs_education'))->value;

    $this->template->main = $info;
  }
}
