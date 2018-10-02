<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cabinet_Teacher extends Controller_Cabinet
{
	public function action_index()
	{
		$cabinet = View::factory('cabinet/v_cabinet');
		$cabinet->kind = $this->user->kind;
		$cabinet->pageTitle = $this->pageTitle . ' - Чат';

		$user = View::factory('cabinet/v_chat');

		$user->user = ORM::factory('teacher', $this->user->id);

		//$groups = ORM::factory('student')->getGroups();
		$groups = ORM::factory('student')
			->group_by('group')
			->order_by('group')
			->find_all()
			->as_array('group', 'group');
		$groups[0] = '';
		asort($groups);
		$data['groups'] = $groups;

		$addressees = ORM::factory('student')
			->order_by('person')
			->find_all()
			->as_array('id', 'person');
		$addressees[0] = '';
		asort($addressees);
		$data['addressees'] = $addressees;
		$data['message'] = ORM::factory('message');
		$data['userId'] = $this->user->id;
		$data['kind'] = $this->user->kind;
		$user->message = View::factory('cabinet/v_message', $data);

		$user->messagesRange = View::factory('cabinet/v_messages_range');

		/*$data = [];
		$data['userId'] = $this->user->id;
		$data['dirImg'] = $this->dirImg;
		$data['messages'] = ORM::factory('message')->getMessages($this->user->id, -1);
		$user->messages = View::factory('cabinet/v_messages', $data);*/

		// Т.к. при загрузке просмотра v_cabinet запускается скрипт loadMessages,
		// то он и заполнит переменную messages
		$user->messages = '';

		$cabinet->cabinet = $user;
		$this->template->main = $cabinet;
	}
}
