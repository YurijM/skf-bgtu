<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Pagination extends Controller_Widget {
  public $template = '/widgets/w_pagination';

  //--------------------------------------------------------------------------//
  public function action_index()
	{
    $this->template->mode = $this->mode;
    $this->template->count = $this->request->param('count');
    $this->template->page = $this->request->param('page');
    
    // В параметре <url> передаётся "адрес" страницы, на которой расположен пагинатор.
    // Этот "адрес" содержит имена каталога, контроллера, экшина и, возможно, какого-то дополнительного параметра, разделённых символом '@'.
    $url = explode('@', $this->request->param('url'));
    $directory = $url[0];
    $controller = $url[1];
    $action = $url[2];
    
    // Этот "костыль" добавлен исключительно для отображения статей.
    // Там необходимо дополнительно иметь параметр "тип публикации".
    if (count($url) > 3)
    {
      $this->template->add_param = $url[3];
    }
    
    $this->template->url =
      ($directory != '' ? $directory.'/' : '').
      ($controller != '' ? $controller : '').
      ($action != '' ? '/'.$action : '');
    
//    // Этот "адрес" может содержать либо только имя контроллера, либо имена каталога и контроллера, разделённых символом '@'.
//    if (count($url) > 1)
//    {
//      // <каталог>/<контроллер>
//      $this->template->url = $url[0].'/'.$url[1];
//    }
//    else
//    {
//      // <контроллер>
//      $this->template->url = $url[0];
//    }
  }
} 
