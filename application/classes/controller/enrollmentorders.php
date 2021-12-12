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

		/*$orders->start = explode('.', ORM::factory('setting', array('key' => 'receiving_documents_start'))
			->value);
		$orders->finish = explode('.', ORM::factory('setting', array('key' => 'receiving_documents_finish'))
			->value);

		//$orders->year = $this->request->param('year');
		$year = $orders->start[2];*/

		$year = $this->request->param('year');

		$orders->start = [];
		$orders->receiving = true;

		if (!isset($year)) {
			$start = explode('.', ORM::factory('setting', array('key' => 'receiving_documents_start'))->value);
			$finish = explode('.', ORM::factory('setting', array('key' => 'receiving_documents_finish'))->value);

			if (date('Ymd') < date($start[2] . $start[1] . $start[0])
				|| date('Ymd') > date($finish[2] . $finish[1] . $finish[0])) {
				$orders->receiving = false;
				$orders->start = $start;
			}

			$orders->start = $start;
			$year = $orders->start[2];
		}

		$orders->year = $year;

    $orders->orders = ORM::factory('enrollmentorder')
			->where('YEAR("date")', '=', $year)
			->order_by('date', 'DESC')
			->find_all();

    $this->template->main = $orders;
  }
}
