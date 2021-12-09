<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Apply extends Controller_Base {
	public function action_index()
  {
    $this->template->page_title = 'Подать заявление';

    $apply = View::factory('v_apply');
    
    $apply->mode = $this->mode;
    $apply->page_title = $this->template->page_title;
		$apply->email = ORM::factory('setting', array('key' => 'email_prk'))->value;

		$apply->start = explode('.', ORM::factory('setting', array('key' => 'receiving_documents_start'))
			->value);
		$apply->finish = explode('.', ORM::factory('setting', array('key' => 'receiving_documents_finish'))
			->value);

    $this->template->main = $apply;
  }
}
