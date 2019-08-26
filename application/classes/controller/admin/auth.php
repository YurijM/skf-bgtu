<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Auth extends Controller_Admin {
  public function action_index()
  {
    /*$model = ORM::factory('user');
    $model->values(array(
    	'id' => 1001,
      'username' => 'учеба',
      'password' => '4m8bai',
      'password_confirm' => '4m8bai',
      'email' => 'test@mail.ru',
			'kind' => 2
    ));
    $model->save();*/

    $this->login();
  }

  public function login()
  {
    $this->template = View::factory('admin/v_auth');
    $this->template->dir_css = $this->dir_css;
    $this->template->page_title = 'Авторизация';
    $this->template->site_name = $this->site_name;
    $this->template->user = '';

    unset($this->template->error);

    $post = $this->request->post();
		if ($post)
		{
			// Если значения логина и пароля не пустые то авторизируемся на сайте
			if (! empty($post['user']) && ! empty($post['password']))
			{
				Auth::instance()->login($post['user'], $post['password']);

        // Проверяем авторизировался пользователь или нет
        if (Auth::instance()->logged_in('admin'))
        {
          // Если пользователь авторизировался, то главная страница
          //$this->template->main = View::factory('admin/v_main_admin');
          $this->request->redirect('admin');
        }
        else
        {
          // Если пользователь не авторизировался то выводим ошибку
          $this->template->error = 'Извините, но имя или пароль указаны неверно';
          $this->template->user = $post['user'];
        }
      }
      else
      {
        // Если одно из полей пустое
        $this->template->error = 'Извините, но имя и пароль должны быть указаны';
        $this->template->user = $post['user'];
      }
    }
  }
}
