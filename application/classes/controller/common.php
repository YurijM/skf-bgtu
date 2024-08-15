<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Common extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Основные сведения';

    $svedencommon = View::factory('v_common');

		$svedencommon->dir_docs = ORM::factory('setting', ['key' => 'dir_docs_docs'])->value;

    $svedencommon->mode = $this->mode;
    $svedencommon->page_title = $this->template->page_title;

    $this->template->main = $svedencommon;
  }
}
