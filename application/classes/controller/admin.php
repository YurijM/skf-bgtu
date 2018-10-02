<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Base {
  public $template = 'admin/v_base';  // Базовый шаблон
//  protected $user;
//  protected $auth;

  public function before()
  {
    parent::before();
    
    $this->site_name = ORM::factory('setting', array('key' => 'site_name'))->value;
    $this->dir_css = ORM::factory('setting', array('key' => 'dir_css'))->value;
    $this->dir_js = ORM::factory('setting', array('key' => 'dir_js'))->value;
    
    $this->template->menu = ORM::factory('menuadmin')->order_by('item')->find_all();

    $auth = Auth::instance();
    //$this->user = $this->auth->get_user();
    $this->template->controller = Request::initial()->controller();
    
    if ($this->template->controller != 'auth')
    {
      if (! $auth->logged_in('admin'))
      {
        $this->request->redirect('login');
      }
    }
  }
  
  public function action_index()
  {
    $this->request->redirect('admin/settings');
  }
}