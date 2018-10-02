<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Docs extends Controller_Base {
  //==========================================================================//
	public function action_index()
  {
    $this->template->page_title = 'Документы';

    $docs = View::factory('v_docs');
    
    $docs->mode = $this->mode;
    $docs->page_title = $this->template->page_title;
    $docs->dir_docs = ORM::factory('setting', array('key' => 'dir_docs_docs'))->value;

    $model = Model::factory('docs')->load();

    $docs->docs = $model['docs'];
    $docs->docs_continuation = $model['docs_continuation'];
    $docs->orders = $model['orders'];
    $docs->docs_continuation1 = $model['docs_continuation1'];

    $this->template->main = $docs;
  }
}
