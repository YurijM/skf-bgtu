<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Attachments1 extends Controller_Base {
  //==========================================================================//
	public function action_index()
  {
    $this->template->page_title = 'Приложения';

    $docs = View::factory('v_attachments');
    
    $docs->mode = $this->mode;
    $docs->page_title = $this->template->page_title;
    $docs->dir_docs = ORM::factory('setting', array('key' => 'dir_docs_docs'))->value;

    $model = Model::factory('docs')->load();

    $docs->docs = $model['attachments1'];

    $this->template->main = $docs;
  }
}
