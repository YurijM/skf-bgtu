<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cateringservices extends Controller_Base {
  //==========================================================================//
	public function action_index()
  {
    $this->template->page_title = 'Организация питания в образовательной организации';

    $catering = View::factory('v_catering_services');

    $catering->mode = $this->mode;
    $catering->page_title = $this->template->page_title;

    $this->template->main = $catering;
  }
}
