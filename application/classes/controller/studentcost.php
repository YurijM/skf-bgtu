<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Studentcost extends Controller_Base {
  //==========================================================================//
	public function action_index()
  {
    $this->template->page_title = 'Способы оплаты';

    $cost = View::factory('v_student_cost');

    $cost->mode = $this->mode;
    $cost->page_title = $this->template->page_title;

    $cost->site_name = ORM::factory('setting', array('key' => 'site_name'))->value;
    $cost->dir_img_docs = ORM::factory('setting', array('key' => 'dir_img_docs'))->value;
    $cost->dir_docs = ORM::factory('setting', array('key' => 'dir_docs'))->value;
    
    $this->template->main = $cost;
  }
}
