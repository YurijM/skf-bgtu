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

		$docs->copyDoc1 = $model['copyDoc1'];
    $docs->docLink = $model['docLink'];
		$docs->paid = $model['paid'];
		$docs->copyDoc2 = $model['copyDoc2'];
    $docs->reports = $model['reports'];

    $this->template->main = $docs;
  }
}
