<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Applicationsnumbercollege extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Поданные заявления СПО';

    $applications = View::factory('v_applications_number_college');
    
    $applications->mode = $this->mode;
    $applications->page_title = $this->template->page_title;
    
    $applications->year = $this->request->param('year');

    $this->template->main = $applications;
  }
}
