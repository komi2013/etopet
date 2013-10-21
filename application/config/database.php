<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
	'default' => array
	(
		'type'       => 'postgresql',
		'connection' => array(
			'host'	     => '127.0.0.1',
			'username'   => 'postgres',
			'password'   => '',
			'persistent' => FALSE,
			'database'   => 'etopet',
		),
		'primary_key'  => '',   // Column to return from INSERT queries, see #2188 and #2273
		'schema'       => '',
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => FALSE,
		'profiling'    => TRUE,
	),
);
