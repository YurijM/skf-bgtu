<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Rightsobligations extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Права и обязанности';

    $rights = View::factory('v_rights_obligations');

    $rights->mode = $this->mode;
    $rights->page_title = $this->template->page_title;

    $this->template->main = $rights;
  }
}
