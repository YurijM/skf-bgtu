<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Exit extends Controller_Admin {
  public function action_index()
  {
    Auth::instance()->logout();
    
    $this->request->redirect('admin');
  }
}
