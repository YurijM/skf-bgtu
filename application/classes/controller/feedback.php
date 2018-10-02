<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Feedback extends Controller_Base {
  //==========================================================================//
	public function action_index()
  {
    $this->template->page_title = 'Обратная связь';
    
    $to_email = ORM::factory('setting', array('key' => 'email-prk'))->value;

    $feedback = View::factory('v_feedback');
    
    $feedback->mode = $this->mode;

    $feedback->site_name = ORM::factory('setting', array('key' => 'site_name'))->value;
    $feedback->dir_js = ORM::factory('setting', array('key' => 'dir_js'))->value;
    
    $feedback->status = '';
    $feedback->captcha_error = '';
      
    $feedback->letter = ORM::factory('letter');
    
    if (isset($_POST['send']))
    {
      $feedback->letter->from_name = trim(Arr::get($_POST, 'from_name'));
      $feedback->letter->from_email = trim(Arr::get($_POST, 'from_email'));
      $feedback->letter->from_phone = trim(Arr::get($_POST, 'from_phone'));
      $feedback->letter->theme = trim(Arr::get($_POST, 'theme'));
      $feedback->letter->letter = trim(Arr::get($_POST, 'letter'));

      $captcha = Arr::get($_POST, 'captcha');
      if (Captcha::valid($captcha))
      {

        $email = Kohana::$config->load('email');
        Email::connect($email);

        try
        {
          Email::send($to_email, $email->options['username'], 'Письмо с сайта - '.$feedback->letter->theme.' - автор письма '.$feedback->letter->from_name.' ('.$feedback->letter->from_email.($feedback->letter->from_phone != '' ? ', тел.'.$feedback->letter->from_phone : '').')', $feedback->letter->letter, $html = FALSE);
          $feedback->status = 'Почта успешно отправлена';

          $feedback->letter->save();
        }
        catch (Exception $e)
        {
          $feedback->status = 'Ошибка отправки почты: '.$e->getMessage();
        }
      }
      else
      {
        $feedback->captcha_error = 'Текст введён неправильно. Попробуйте ещё раз.';
      }
    }
    
    $feedback->captcha = Captcha::instance();
    
    $this->template->main = $feedback;
  }
}
