<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-08-03 10:10:32 --- ERROR: ErrorException [ 8 ]: Undefined index: code ~ APPPATH/classes/controller/in/fb.php [ 21 ]
2013-08-03 10:10:32 --- STRACE: ErrorException [ 8 ]: Undefined index: code ~ APPPATH/classes/controller/in/fb.php [ 21 ]
--
#0 /prd/etopet/application/classes/controller/in/fb.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/prd/etopet/app...', 21, Array)
#1 /prd/etopet/application/classes/controller/in/fb.php(7): Controller_In_Fb->login()
#2 [internal function]: Controller_In_Fb->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Fb))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-08-03 10:10:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-03 10:10:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}