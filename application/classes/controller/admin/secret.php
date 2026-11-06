<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Secret extends Controller_Admin
{
	private $page_title = 'Смена пароля';

	//==========================================================================//
	public function before()
	{
		parent::before();

		$this->template->page_title = $this->page_title;
	}

	//==========================================================================//
	public function action_index()
	{
		/*$secret = View::factory('admin/v_secret');
		$secret->page_title = $this->page_title;

		$secret->user = ORM::factory('user')->where('username', '=', '')->find();

		$this->template->main = $secret;*/

		$this->password_save();
	}

	//==========================================================================//
	public function password_save()
	{
		$this->template = View::factory('admin/v_secret');
		$this->template->page_title = $this->page_title;
		$this->template->dir_css = $this->dir_css;
		$this->template->user = ORM::factory('user')->where('username', '=', '')->find();

		unset($this->template->error);

		$post = $this->request->post();
		if ($post) {
			if (!empty($post['username'])) {
				$this->template->user = ORM::factory('user')->where('username', '=', $post['username'])->find();
				$this->template->error = $this->template->user->id;
			} else {
				$this->template->error = 'Имя пользователя не может быть пустым';
			}
		}
	}
}
