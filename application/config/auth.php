<?php defined('SYSPATH') or die('No direct access allowed.');

return array(

	'driver'       => 'ORM',
	'hash_method'  => 'sha256',
	'hash_key'     => 'mimimi',
	'lifetime'     => 1209600,
	'session_key'  => 'auth_user',

	// Username/password combinations for the Auth File driver
	'users' => array(
		// 'admin' => '2c7579fd14b4113071253273ac71bd5e8ef642423cb866660092f567efb246eb',
	),

);
