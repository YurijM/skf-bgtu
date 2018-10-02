<?php defined('SYSPATH') or die('No direct script access.');

class Helper_Addfunction
{
  //--------------------------------------------------------------------------//
	public static function int_to_datetime($value = 0, $with_seconds = TRUE)
	{
		if ($value == 0)
    {
			return '';
    }
		
		// вывод результата
		return ($with_seconds ? date('d.m.Y H:i:s', $value) : date('d.m.Y H:i', $value));
	}
  
  //--------------------------------------------------------------------------//
	public static function datetime_from_mysql($value, $with_seconds = TRUE)
	{
		if ($value == '')
    {
			return '';
    }
			
		// Разбиение строки на 2 части - date, time 
		$date_time = explode(' ', $value);
		
		// Разбиение даты
		$date = explode('-', $date_time[0]);
		
		// Разбиение времени
		$time = explode(':', $date_time[1]);
		
		// получаем дату
		$dt = mktime($time[0], $time[1], $time[2], $date[1], $date[2], $date[0]);
		
		// вывод результата
		return ($with_seconds ? date('d.m.Y H:i:s', $dt) : date('d.m.Y H:i', $dt));
	}
  
  //--------------------------------------------------------------------------//
	public static function datetime_to_mysql($value)
	{
		if ($value == '')
    {
			return '';
    }
		// Разбиение строки на 2 части - date, time 
		$date_time = explode(' ', $value);
		
		// Разбиение даты
		$date = explode('.', $date_time[0]);
		
		// Разбиение времени
		$time = explode(':', $date_time[1]);
		
		// получаем дату
		if (count($time) == 3)
    {
			$dt = mktime($time[0], $time[1], $time[2], $date[1], $date[0], $date[2]);
    }
		else
    {
			$dt = mktime($time[0], $time[1], 0, $date[1], $date[0], $date[2]);
    }
		
		// вывод результата
		return date('Y-m-d H:i:s', $dt);
	}
  
  //--------------------------------------------------------------------------//
	public static function date_from_mysql($value)
	{
		if ($value == '')
    {
			return '';
    }
			
		// Разбиение даты
		$date = explode('-', $value);
		
		// получаем дату
		$dt = mktime(0, 0, 0, $date[1], $date[2], $date[0]);

    return date('d.m.Y', $dt);
	}
  
  //--------------------------------------------------------------------------//
	public static function date_to_mysql($value)
	{
		if ($value == '')
    {
			return null;
    }
			
		// Разбиение даты
		$date = explode('.', $value);
		
		// получаем дату
    $dt = mktime(0, 0, 0, $date[1], $date[0], $date[2]);
		
		// вывод результата
		return date('Y-m-d', $dt);
	}
  
  //--------------------------------------------------------------------------//
  public static function get_mode()
  {
    $session = Session::instance();
    $mode = $session->get('mode');

    if ($mode == '')
    {
      $mode = 'normal';
      $session->set('mode', $mode);
    }
    return $mode;
  }
  
  //==========================================================================//
  public static function load_file_to_server($dir, $file)
  {
    // Удаляем файлы из каталога временного хранения
    $lst = glob($dir.'*.*');
    
    foreach ($lst as $filename)
    {
      @unlink($filename); 
    }

    if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $dir.$file))
    { 
      return 'success';
    }
    else
    {
      return 'error';
    }
  }
  
  //==========================================================================//
  public static function load_doc_file_to_server($file)
  {
    if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $file))
    { 
      return 'success';
    }
    else
    {
      return 'error';
    }
  }
}
