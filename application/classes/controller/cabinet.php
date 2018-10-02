<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cabinet extends Controller_Base
{
	public $pageTitle = 'Личный кабинет';
	public $template = 'cabinet/v_base';  // Базовый шаблон
	public $user;
	public $siteName;
	public $dirCss;
	public $dirJs;
	public $dirImg;
	public $dirDocs;

	public function before()
	{
		parent::before();

		$this->siteName = ORM::factory('setting', array('key' => 'site_name'))->value;
		$this->dirCss = ORM::factory('setting', array('key' => 'dir_css'))->value;
		$this->dirJs = ORM::factory('setting', array('key' => 'dir_js'))->value;
		$this->dirImg = ORM::factory('setting', array('key' => 'dir_img'))->value . 'cabinet/';
		$this->dirDocs = ORM::factory('setting', array('key' => 'dir_docs'))->value;

		$this->template->siteName = $this->siteName;
		$this->template->pageTitle = $this->pageTitle;
		$this->template->dirCss = $this->dirCss;
		$this->template->dirJs = $this->dirJs;
		$this->template->dirImg = $this->dirImg;
		$this->template->dirDocs = $this->dirDocs;

		$auth = Auth::instance();
		$this->user = $auth->get_user();
		//$this->template->user = $this->user();

		$this->template->menu_cabinet = '';
		if ($this->user) {
			$this->template->menu_cabinet = View::factory('cabinet/v_menu', [
				'kind' => $this->user->kind,
				'user' => $this->user->kind == 0 ? ORM::factory('student', $this->user->id) : ORM::factory('teacher', $this->user->id)]);
		}

		$this->template->controller = Request::initial()->controller();
		if ($this->template->controller != 'auth') {
			if (!$auth->logged_in('login')) {
				$this->request->redirect('cabinet/auth');
			}
		}
	}

	public function action_index()
	{
		if (ORM::factory('student', $this->user)->id) {
			$this->request->redirect('cabinet/student');
		} else {
			$this->request->redirect('cabinet/teacher');
		};
	}
}
