<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cabinet_Exit extends Controller_Cabinet {
  public function action_index()
  {
    Auth::instance()->logout();
    
    $this->request->redirect('cabinet');
  }
}
