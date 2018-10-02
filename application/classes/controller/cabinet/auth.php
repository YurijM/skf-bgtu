<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cabinet_Auth extends Controller_Cabinet
{
	public function action_index()
	{
		/*$model = ORM::factory('user');
		$model->values(array(
			'username' => 'Аладина Г.Н.',
			'password' => '2w5mv2',
			'password_confirm' => '2w5mv2',
			'email' => 'test3@mail.ru',
		));
		$model->save();*/

		/*
		 * Не очень хороший вариант, но...
		 * После импорта данных из БД MS SQL поле password в таблице users надо преобразовать в hash.
		 * Проверяем длину строки в поле password в произвольной строке таблицы.
		 * Если длина меньше 64 символов, то конвертируем данные поля password во всех строках таблицы users.
			*/
		try {
			$password = ORM::factory('user')->find()->password;
			if (strlen($password) < 64) {
				$users = ORM::factory('user')->find_all();
				foreach ($users as $user) {
						$user->password = $user->password;
					try {
						$user->save();
					} catch (ORM_Validation_Exception $e) {
						$errors = $e->errors('validation');
						echo $user->id . '<br>';
						var_dump($errors);
						echo '<br>';
					}
				}
			}
		} catch (Exception $e) {
			$errors = $e->getMessage();
			var_dump($errors);
		}

		$this->login();
	}

	public function login()
	{
		$this->template = View::factory('cabinet/v_auth');
		$this->template->dirCss = $this->dirCss;
		$this->template->pageTitle = 'Авторизация';
		$this->template->siteName = $this->siteName;
		//$this->template->user = '';
		$this->template->user = $this->user;

		unset($this->template->error);

		$post = $this->request->post();
		if ($post) {
			// Если значения логина и пароля не пустые то авторизируемся на сайте
			if (!empty($post['user']) && !empty($post['password'])) {
				Auth::instance()->login($post['user'], $post['password']);

				// Проверяем авторизировался пользователь или нет
				if (Auth::instance()->logged_in('login')) {
					// Если пользователь авторизировался, то главная страница
					//$this->template->main = View::factory('admin/v_main_admin');
					$this->request->redirect('cabinet');
				} else {
					// Если пользователь не авторизировался то выводим ошибку
					$this->template->error = 'Извините, но имя или пароль указаны неверно';
					$this->template->user = $post['user'];
				}
			} else {
				// Если одно из полей пустое
				$this->template->error = 'Извините, но имя и пароль должны быть указаны';
				$this->template->user = $post['user'];
			}
		}
	}
}
