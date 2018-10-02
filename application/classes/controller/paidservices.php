<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Paidservices extends Controller_Base {
  //==========================================================================//
	public function action_index()
  {
    $this->template->page_title = 'Платные образовательные услуги';

    $services = View::factory('v_paid_services');
    
    $services->mode = $this->mode;
    $services->page_title = $this->template->page_title;
    $services->dir_docs = ORM::factory('setting', array('key' => 'dir_docs_docs'))->value;
    $services->dir_docs_paid_services = ORM::factory('setting', array('key' => 'dir_docs_paid_services'))->value;

    $model = Model::factory('docs')->load();
    $services->orders = $model['orders'];
    
    $this->template->main = $services;
  }
}
