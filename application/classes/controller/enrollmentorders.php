<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Enrollmentorders extends Controller_Base {
  //==========================================================================//
	public function action_index()
  {
    $this->template->page_title = 'Приказы на зачисление';

    $orders = View::factory('v_enrollment_orders');
    
    $orders->mode = $this->mode;
    $orders->page_title = $this->template->page_title;
    
    $orders->site_name = ORM::factory('setting', array('key' => 'site_name'))->value;
    $orders->dir_docs_enrollment_orders = ORM::factory('setting', array('key' => 'dir_docs_enrollment_orders'))->value;
    $orders->dir_img_enrollment_orders = ORM::factory('setting', array('key' => 'dir_img_enrollment_orders'))->value;

    $orders->year = $this->request->param('year');
    
    $orders->orders = ORM::factory('enrollmentorder')->where('YEAR("date")', '=', $orders->year)->order_by('date', 'DESC')->find_all();

    $this->template->main = $orders;
  }
}
