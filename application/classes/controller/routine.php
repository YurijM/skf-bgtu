<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Routine extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Правила внутреннего распорядка';

    $routine = View::factory('v_routine');

    $routine->mode = $this->mode;
    $routine->page_title = $this->template->page_title;

    $this->template->main = $routine;
  }
}
