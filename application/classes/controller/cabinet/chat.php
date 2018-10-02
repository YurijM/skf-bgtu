<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cabinet_Chat extends Controller_Cabinet
{
  public function action_index()
  {
		$cabinet = View::factory('cabinet/v_cabinet');
		$cabinet->pageTitle = $this->pageTitle . ' - Чат';
		$cabinet->kind = $this->user->kind;

		$chat = View::factory('cabinet/v_chat');

		$addressees = ORM::factory('teacher')
			->order_by('person')
			->find_all()
			->as_array('id', 'person');
		$addressees[0] = '';
		asort($addressees);
		$data['addressees'] = $addressees;
		$data['message'] = ORM::factory('message');
		$data['userId'] = $this->user->id;
		$data['kind'] = $this->user->kind;
		$chat->message = View::factory('cabinet/v_message', $data);

		$chat->messagesRange = View::factory('cabinet/v_messages_range');

		/*$data = [];
		$data['userId'] = $this->user->id;
		$data['dirImg'] = $this->dirImg;
		$data['messages'] = ORM::factory('message')->getMessages($this->user->id, -1);
		$chat->messages = View::factory('cabinet/v_messages', $data);*/

		// Т.к. при загрузке просмотра v_cabinet запускается скрипт loadMessages,
		// то он и заполнит переменную messages
		$chat->messages = '';

		$cabinet->cabinet = $chat;
		$this->template->main = $cabinet;
	}
}
