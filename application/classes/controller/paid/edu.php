<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Paid_Edu extends Controller_Base {
	//==========================================================================//
	public function action_index()
	{
		$this->template->page_title = 'Платные образовательные услуги';

		$paidedu = View::factory('v_paid_edu');

		$paidedu->mode = $this->mode;
		$paidedu->page_title = $this->template->page_title;
		$paidedu->dir_docs = ORM::factory('setting', array('key' => 'dir_docs_docs'))->value;
		$paidedu->dir_img = ORM::factory('setting', array('key' => 'dir_img'))->value;
		$paidedu->dir_docs_paid_services = ORM::factory('setting', array('key' => 'dir_docs_paid_services'))->value;

		$model = Model::factory('docs')->load();
		//$paidedu->orders = $model['orders'];
		$paidedu->orders = $model['paid'];

		$this->template->main = $paidedu;
	}
}
