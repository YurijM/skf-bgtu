<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Document extends Controller_Base {
  //==========================================================================//
	public function action_index()
  {
    $this->template->page_title = 'Документы';

    $docs = View::factory('v_document');
    
    $docs->mode = $this->mode;
    $docs->page_title = $this->template->page_title;
    $docs->dir_docs = ORM::factory('setting', array('key' => 'dir_docs_docs'))->value;

    $model = Model::factory('docs')->load();

    $docs->docs = $model['docs'];
    $docs->orders = $model['orders'];

    $this->template->main = $docs;
  }
}
