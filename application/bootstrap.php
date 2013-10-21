<?php defined('SYSPATH') or die('No direct script access.');
require SYSPATH.'classes/kohana/core'.EXT;
if (is_file(APPPATH.'classes/kohana'.EXT))
{
	require APPPATH.'classes/kohana'.EXT;
}
else
{
	require SYSPATH.'classes/kohana'.EXT;
}
date_default_timezone_set('Asia/Tokyo');
setlocale(LC_ALL, 'en_US.utf-8');
spl_autoload_register(array('Kohana', 'auto_load'));
ini_set('unserialize_callback_func', 'spl_autoload_call');
I18n::lang('en-us');
if (isset($_SERVER['KOHANA_ENV']))
{
	Kohana::$environment = constant('Kohana::'.strtoupper($_SERVER['KOHANA_ENV']));
}
Kohana::init(array(
// 	'base_url'   => '/stg',
//	'profile'   => 'TRUE',
));
Kohana::$log->attach(new Log_File(APPPATH.'logs'));
Kohana::$config->attach(new Config_File);
Kohana::modules(array(
// 	 'auth'       => MODPATH.'auth',       // Basic authentication
// 	 'cache'      => MODPATH.'cache',      // Caching with multiple backends
//    'codebench'  => MODPATH.'codebench',  // Benchmarking tool
	 'database'   => MODPATH.'database',   // Database access
// 	 'image'      => MODPATH.'image',      // Image manipulation
	 'orm'        => MODPATH.'orm',        // Object Relationship Mapping
//    'unittest'   => MODPATH.'unittest',   // Unit testing
	));

Cookie::$salt = 'QoQfRPscdI';
Cookie::$expiration = 604800;
Route::set('default', '<lang>(/<directory>)/<controller>(/<one>(/<two>(/<three>)))',
  array(
    'lang' => '(ja|en|es|ar|zh|ko)',
    'directory' => '(in)',
  ));
