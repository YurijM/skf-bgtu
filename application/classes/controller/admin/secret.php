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
		$this->template->password = '';
		$this->template->password_confirm = '';

		unset($this->template->error);

		$post = $this->request->post();
		if ($post) {
			if (isset($_POST['save'])) {
				if (!empty($post['username'])) {
					$this->template->user = ORM::factory('user')->where('username', '=', $post['username'])->find();

					$this->template->password = $post['password'];
					$this->template->password_confirm = $post['password_confirm'];

					if (empty($post['password']) || empty($post['password_confirm'])) {
						$this->template->error = 'Пароль не может быть пустым';
					} else {
						if ($post['password'] != $post['password_confirm']) {
							$this->template->error = 'Пароли должны совпадать';
						} else {
							$this->template->user->password = $post['password'];
							try {
								//9d9e5ddef165f9af96a9d87798064eaf8b934099941578ac2d826b97235ae964
								$this->template->user->save();
								$this->request->redirect('admin/settings/');
							} catch (ORM_Validation_Exception $e) {
								$errors = $e->errors('validation');
								echo $this->template->user->id . '<br>';
								var_dump($errors);
								$this->template->error = $errors;
								echo '<br>';
							}
						}
					}
				} else {
					$this->template->error = 'Имя пользователя не может быть пустым';
				}
			} else {
				if (isset($_POST['cancel'])) {
					$this->request->redirect('admin/settings/');
				}
			}
		}
	}
}
