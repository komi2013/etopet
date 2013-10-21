<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-07-31 13:26:56 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Domain::$client_id ~ APPPATH/views/home/trial_en.php [ 17 ]
2013-07-31 13:26:56 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Domain::$client_id ~ APPPATH/views/home/trial_en.php [ 17 ]
--
#0 /prd/etopet/application/views/home/trial_en.php(17): Kohana_Core::error_handler(8, 'Undefined prope...', '/prd/etopet/app...', 17, Array)
#1 /prd/etopet/system/classes/kohana/view.php(61): include('/prd/etopet/app...')
#2 /prd/etopet/system/classes/kohana/view.php(343): Kohana_View::capture('/prd/etopet/app...', Array)
#3 /prd/etopet/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /prd/etopet/application/views/eto/template.php(46): Kohana_View->__toString()
#5 /prd/etopet/system/classes/kohana/view.php(61): include('/prd/etopet/app...')
#6 /prd/etopet/system/classes/kohana/view.php(343): Kohana_View::capture('/prd/etopet/app...', Array)
#7 /prd/etopet/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /prd/etopet/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#10 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /prd/etopet/index.php(109): Kohana_Request->execute()
#13 {main}
2013-07-31 14:46:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-07-31 14:46:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-07-31 14:46:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-07-31 14:46:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-07-31 14:46:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-07-31 14:46:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-07-31 14:46:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: game ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-07-31 14:46:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: game ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-07-31 14:46:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: game ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-07-31 14:46:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: game ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-07-31 14:47:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: game ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-07-31 14:47:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: game ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-07-31 14:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: game ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-07-31 14:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: game ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-07-31 14:49:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: game ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-07-31 14:49:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: game ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}