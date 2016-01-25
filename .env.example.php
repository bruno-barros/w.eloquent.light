<?php
return array(

	// if the .env.local.php is present the environment will be set to 'local'
	// by default, but you can set a personal environment configuration for some
	// part of the application
	'APP_ENV'     => 'local',

	'APP_THEME'   => 'default',
//	'APP_THEME'   => 'intranet',

    'DB_HOST'     => 'localhost',
    'DB_NAME'     => 'weloquent',
    'DB_USER'     => 'root',
    'DB_PASSWORD' => 'secret',
	'DB_PREFIX'   => 'wp_',
	'WP_HOME'     => 'http://localhost/weloquent-bootstraped',
	'WP_SITEURL'  => 'http://localhost/weloquent-bootstraped/cms',


    'MAIL_DRIVER' => '',
    'MAIL_HOST' => 'localhost',
    'MAIL_PORT' => 25,
    'MAIL_ENCR' => '',
    'MAIL_USER' => '',
    'MAIL_PASS' => '',

);