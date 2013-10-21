<?php defined('SYSPATH') or die('No direct script access.');

return array(
  'native' => array(
    'name' => 'kohana',
    'lifetime' => 604800, // 7 days
  ),
  'cookie' => array(
    'name' => 'kohana',
    'encrypted' => TRUE,
    'lifetime' => 604800,
  ),
);
