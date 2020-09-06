<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Covid19 extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'COVID-19';

    $covid19 = View::factory('v_covid19');

		$covid19->mode = $this->mode;
		$covid19->page_title = $this->template->page_title;
		$covid19->dir_docs_covid19 = ORM::factory('setting', array('key' => 'dir_docs_covid19'))->value;
		$covid19->dir_img_covid19 = ORM::factory('setting', array('key' => 'dir_img_covid19'))->value;

    $this->template->main = $covid19;
  }
}
