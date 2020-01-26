<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Vacant extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Вакантные места для приема (перевода)';

    $vacant = View::factory('v_vacant');
    
    $vacant->mode = $this->mode;
    $vacant->page_title = $this->template->page_title;

    $this->template->main = $vacant;
  }
}
