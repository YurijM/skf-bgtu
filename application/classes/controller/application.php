<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Application extends Controller_Base {
  //==========================================================================//
	public function action_index()
  {
    $this->template->page_title = 'Форма договора на обучение';

    $application = View::factory('v_application');

    $application->mode = $this->mode;
    $application->page_title = $this->template->page_title;

    $application->site_name = ORM::factory('setting', ['key' => 'site_name'])->value;
    $application->dir_img_docs = ORM::factory('setting', ['key' => 'dir_img_docs'])->value;
    $application->dir_docs = ORM::factory('setting', ['key' => 'dir_docs'])->value;
    $application->dir_docs_docs = ORM::factory('setting', ['key' => 'dir_docs_docs'])->value;
    
    $this->template->main = $application;
  }
}
