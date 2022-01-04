<?php defined('SYSPATH') or die('No direct script access.');

// -- Environment setup --------------------------------------------------------

// Load the core Kohana class
require SYSPATH . 'classes/kohana/core' . EXT;

if (is_file(APPPATH . 'classes/kohana' . EXT)) {
	// Application extends the core
	require APPPATH . 'classes/kohana' . EXT;
} else {
	// Load empty core extension
	require SYSPATH . 'classes/kohana' . EXT;
}

/**
 * Set the default time zone.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/timezones
 */
date_default_timezone_set('Europe/Moscow');

/**
 * Set the default locale.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/function.setlocale
 */
setlocale(LC_ALL, 'en_US.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @link http://kohanaframework.org/guide/using.autoloading
 * @link http://www.php.net/manual/function.spl-autoload-register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @link http://www.php.net/manual/function.spl-autoload-call
 * @link http://www.php.net/manual/var.configuration#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

// -- Configuration and initialization -----------------------------------------

/**
 * Set the default language
 */
I18n::lang('en-us');

/**
 * Set Kohana::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 *
 * Note: If you supply an invalid environment name, a PHP warning will be thrown
 * saying "Couldn't find constant Kohana::<INVALID_ENV_NAME>"
 */
if (isset($_SERVER['KOHANA_ENV'])) {
	Kohana::$environment = constant('Kohana::' . strtoupper($_SERVER['KOHANA_ENV']));
}

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - integer  cache_life  lifetime, in seconds, of items cached              60
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 * - boolean  expose      set the X-Powered-By header                        FALSE
 */
Kohana::init(array(
	'base_url' => '/',
	'index_file' => FALSE,
));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Log_File(APPPATH . 'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Config_File);

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
	'captcha' => MODPATH . 'captcha', //Captcha
	'email' => MODPATH . 'email',   //E-Mail
	'auth' => MODPATH . 'auth',       // Basic authentication
	'cache' => MODPATH . 'cache',      // Caching with multiple backends
	// 'codebench'  => MODPATH.'codebench',  // Benchmarking tool
	'database' => MODPATH . 'database',   // Database access
	'image' => MODPATH . 'image',      // Image manipulation
	'orm' => MODPATH . 'orm',        // Object Relationship Mapping
	// 'unittest'   => MODPATH.'unittest',   // Unit testing
	'userguide' => MODPATH . 'userguide',  // User guide and API documentation
));

/**
 * Cookie Salt
 * @see  http://kohanaframework.org/3.2/guide/kohana/cookies
 *
 * If you have not defined a cookie salt in your Cookie class then
 * Uncomment the line below and define a salt for the Cookie.
 */
// Cookie::$salt = NULL;
Cookie::$salt = 'finibus7eu7finibus7nec';

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */
//if (! Route::cache())
//{
// { Cabinet
Route::set('user', 'user')
	->defaults(array(
		'directory' => 'cabinet',
		'controller' => 'auth',
		'action' => 'index',
	));
Route::set('cabinet', 'cabinet/(<controller>(/<action>(/<id>(/<add_id>))))')
	->defaults(array(
		'directory' => 'cabinet',
		'controller' => 'user',
		'action' => 'index',
	));
// } Cabinet
Route::set('login', 'login')
	->defaults(array(
		'directory' => 'admin',
		'controller' => 'auth',
		'action' => 'index',
	));
//  Route::set('admin_news_list', 'admin/news(/<page>)', array('page' => '\d+'))
//    ->defaults(array(
//      'directory'   => 'admin',
//      'controller' => 'news',
//      'action'    => 'index',
//      'page' => 1,
//    ));
//  Route::set('admin_news', 'admin/news/<action>(/<id>(/<page>(/<photo>)))')
//    ->defaults(array(
//      'directory'   => 'admin',
//      'controller' => 'news',
//    ));
Route::set('articles', 'digests/articles(/<page>(/<type>))', array('page' => '\d+', 'type' => '\d+'))
	->defaults(array(
		'controller' => 'digests',
		'action' => 'articles',
	));
Route::set('kpk_sro', 'kpksro(/<sro>)', array('sro' => '\d+'))
	->defaults(array(
		'controller' => 'kpksro',
		'action' => 'index',
	));
Route::set('confirmation_delete', 'widgets/confirmationdelete/<message>')
	->defaults(array(
		'directory' => 'widgets',
		'controller' => 'confirmationdelete',
		'action' => 'index',
	));
Route::set('pagination', 'widgets/pagination/<count>/<page>/<url>')
	->defaults(array(
		'directory' => 'widgets',
		'controller' => 'pagination',
		'action' => 'index',
	));
Route::set('admin_personnel', 'admin/personnel/deletedegree/<personnel_id>/<degree_id>')
	->defaults(array(
		'directory' => 'admin',
		'controller' => 'personnel',
		'action' => 'deletedegree',
	));
Route::set('admin_direction', 'admin/directions/deletesubject/<direction_id>/<subject_id>')
	->defaults(array(
		'directory' => 'admin',
		'controller' => 'directions',
		'action' => 'deletesubject',
	));
Route::set('admin_article', 'admin/articles/deleteauthor/<article_id>/<author_id>/<page>')
	->defaults(array(
		'directory' => 'admin',
		'controller' => 'articles',
		'action' => 'deleteauthor',
	));
Route::set('admin_list', 'admin/<controller>(/<page>)', array('page' => '\d+'))
	->defaults(array(
		'directory' => 'admin',
		'action' => 'index',
		'page' => 1,
	));
Route::set('admin_with_page', 'admin/<controller>/<action>(/<id>(/<page>(/<photo>)))')
	->defaults(array(
		'directory' => 'admin',
	));
Route::set('admin', 'admin/(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'directory' => 'admin',
		'controller' => 'auth',
		'action' => 'index',
	));
Route::set('for_cecutient', 'for_cecutient(?uri=<uri>)')
	->defaults(array(
		'controller' => 'base',
		'action' => 'for_cecutient',
	));
Route::set('widgets', 'widgets(/<controller>(/<action>(/<id>)))')
	->defaults(array(
		'directory' => 'widgets',
		'action' => 'index',
	));
Route::set('marticulants_previous_years', '<controller>(/<year>)',
	array(
		'controller' => '(matriculants|rankedlists|applicationsnumbercollege)',
		'year' => '\d+')
)
	->defaults(array(
		'action' => 'index',
		'year' => (date('Y' . '1231') > date('Ymd') ? date('Y') : date('Y') + 1), //date('Y'),
	));
Route::set('marticulants_previous_years', '<controller>(/<year>)',
	array(
		'controller' => '(applicationsnumber|enrollmentorders)',
		'year' => '\d+')
)
	->defaults(array(
		'action' => 'index',
	));
Route::set('with_page', '<controller>/<page>(/<id>)', array('page' => '\d+', 'id' => '\d+'))
	->defaults(array(
		'action' => 'index',
	));
Route::set('workprog', 'education(/<controller>/<code>)')
	->defaults(array(
		'controller' => 'workingprogram',
		'code' => '10.02.05'
	));
Route::set('sveden', 'sveden(/<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'basicinfo',
		'action' => 'index',
	));
Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'main',
		'action' => 'index',
	));
//	Route::cache(TRUE);
//}