<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Settings extends Controller_Admin {
  private $page_title = 'Настройки';
  
  //--------------------------------------------------------------------------//
  public function before()
  {
    parent::before();
    
    $this->template->page_title = $this->page_title;
  }
  
  //--------------------------------------------------------------------------//
  public function action_index()
  {
    $settings = View::factory('admin/v_settings_list');
    $settings->settings = ORM::factory('setting')->order_by('key')->find_all();
    $settings->page_title = $this->page_title;

    $this->template->main = $settings;
  }

  //--------------------------------------------------------------------------//
  public function action_edit()
  {
    $id = $this->request->param('id');
    
    $settings = View::factory('admin/v_setting');
    $settings->page_title = $this->page_title;

    if ($id)
    {
      $settings->settings = ORM::factory('setting', $id);
      $settings->confirmation_delete = $this->widget_load($this->widgets_folder.'confirmationdelete/'.$settings->settings->key);
    }
    else
    {
      $settings->settings = ORM::factory('setting');
    }

    $this->template->main = $settings;
  }

  //--------------------------------------------------------------------------//
  public function action_save()
  {
    $id = Arr::get($_POST, 'id');
    if ($id > 0)
    {
      $settings = ORM::factory('setting', $id);
      if (isset($_POST['delete']))
      {
        $settings->delete();
        $this->request->redirect('admin/settings');
      }
    }
    else
    {
      $settings = ORM::factory('setting');
    }
    
    $settings->key = Arr::get($_POST, 'key');
    $settings->value = Arr::get($_POST, 'value');
    $settings->description = Arr::get($_POST, 'description');

    $settings->save();
    
    $this->request->redirect('admin/settings');
  }
}
