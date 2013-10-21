<?php defined('SYSPATH') or die('No direct script access.');

return array(

	'default' => array(
		'key'	=> 'R3S1VUxN2w',
		'mode'   => MCRYPT_MODE_NOFB,
		'cipher' => MCRYPT_RIJNDAEL_128
	),
  'blowfish' => array(
    'key'    => 'key',
    'mode'   => MCRYPT_MODE_ECB,
    'cipher' => MCRYPT_BLOWFISH
  ),

);
