<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Apply extends Controller_Base
{
	public function action_index()
	{
		$this->template->page_title = 'Подать заявление';

		$apply = View::factory('v_apply');

		$apply->mode = $this->mode;
		$apply->page_title = $this->template->page_title;
		$apply->email = ORM::factory('setting', array('key' => 'email_prk'))->value;

		$apply->start = explode('.', ORM::factory('setting', array('key' => 'receiving_documents_start'))->value);
		$apply->finish = explode('.', ORM::factory('setting', array('key' => 'receiving_documents_finish'))->value);

		if (date('Ymd') < date($apply->start[2] . $apply->start[1] . $apply->start[0])
			|| date('Ymd') > date($apply->finish[2] . $apply->finish[1] . $apply->finish[0])) {
			$apply->receiving = false;
		} else {
			$apply->receiving = true;
		}

		$this->template->main = $apply;
	}
}
