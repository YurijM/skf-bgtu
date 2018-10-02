<?php defined('SYSPATH') or die('No direct access allowed.');

return array(
	'driver'       => 'orm',
	'hash_method'  => 'sha256',
	'hash_key'     => 'dolor7sit7amet',
	'lifetime'     => Date::HOUR * 24, // 1209600,
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',

	// Username/password combinations for the Auth File driver
	'users' => array(
		//'admin' => '7de9e3fed384f75bfa21907c41defd632cf254fedf5b46fbd3725352fe4d78f5',
	),

);
