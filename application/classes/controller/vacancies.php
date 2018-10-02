<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Vacancies extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Вакантные места для приема (перевода)';

    $vacancies = View::factory('v_vacancies');
    
    $vacancies->mode = $this->mode;
    $vacancies->page_title = $this->template->page_title;

    $this->template->main = $vacancies;
  }
}
