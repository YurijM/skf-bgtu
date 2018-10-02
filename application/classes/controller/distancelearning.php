<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Distancelearning extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Дистанционное обучение';

    $specialties = View::factory('v_distance_learning');
    
    $specialties->mode = $this->mode;
    $specialties->page_title = $this->template->page_title;

    $this->template->main = $specialties;
  }
}
