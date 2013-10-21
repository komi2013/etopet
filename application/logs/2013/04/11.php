<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-04-11 00:32:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 00:32:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 00:32:25 --- ERROR: ErrorException [ 8 ]: Undefined index: game_pass ~ APPPATH/classes/model/stg1.php [ 218 ]
2013-04-11 00:32:25 --- STRACE: ErrorException [ 8 ]: Undefined index: game_pass ~ APPPATH/classes/model/stg1.php [ 218 ]
--
#0 /prd/etopet/application/classes/model/stg1.php(218): Kohana_Core::error_handler(8, 'Undefined index...', '/prd/etopet/app...', 218, Array)
#1 /prd/etopet/application/classes/model/stg2.php(29): Model_Stg1->eating()
#2 /prd/etopet/application/classes/controller/main.php(30): Model_Stg2->main()
#3 [internal function]: Controller_Main->action_index()
#4 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#5 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /prd/etopet/index.php(109): Kohana_Request->execute()
#8 {main}
2013-04-11 00:34:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting '(' ~ APPPATH/classes/model/stg1.php [ 218 ]
2013-04-11 00:34:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting '(' ~ APPPATH/classes/model/stg1.php [ 218 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-04-11 00:35:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/stg2/template.php [ 79 ]
2013-04-11 00:35:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/stg2/template.php [ 79 ]
--
#0 /prd/etopet/application/views/stg2/template.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', '/prd/etopet/app...', 79, Array)
#1 /prd/etopet/system/classes/kohana/view.php(61): include('/prd/etopet/app...')
#2 /prd/etopet/system/classes/kohana/view.php(343): Kohana_View::capture('/prd/etopet/app...', Array)
#3 /prd/etopet/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /prd/etopet/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#6 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /prd/etopet/index.php(109): Kohana_Request->execute()
#9 {main}
2013-04-11 01:11:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 01:11:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 02:29:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 02:29:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 02:31:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 02:31:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 02:32:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 02:32:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 02:33:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/stg2/template.php [ 79 ]
2013-04-11 02:33:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/stg2/template.php [ 79 ]
--
#0 /prd/etopet/application/views/stg2/template.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', '/prd/etopet/app...', 79, Array)
#1 /prd/etopet/system/classes/kohana/view.php(61): include('/prd/etopet/app...')
#2 /prd/etopet/system/classes/kohana/view.php(343): Kohana_View::capture('/prd/etopet/app...', Array)
#3 /prd/etopet/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /prd/etopet/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#6 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /prd/etopet/index.php(109): Kohana_Request->execute()
#9 {main}
2013-04-11 02:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 02:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 02:34:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 02:34:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 02:35:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 02:35:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 02:36:34 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/model/stg1.php [ 87 ]
2013-04-11 02:36:34 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/model/stg1.php [ 87 ]
--
#0 /prd/etopet/application/classes/model/stg1.php(87): Kohana_Core::error_handler(2, 'Attempt to assi...', '/prd/etopet/app...', 87, Array)
#1 /prd/etopet/application/classes/controller/main.php(30): Model_Stg1->main()
#2 [internal function]: Controller_Main->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-11 03:02:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: reason ~ APPPATH/views/eto/node.php [ 2 ]
2013-04-11 03:02:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: reason ~ APPPATH/views/eto/node.php [ 2 ]
--
#0 /prd/etopet/application/views/eto/node.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/prd/etopet/app...', 2, Array)
#1 /prd/etopet/system/classes/kohana/view.php(61): include('/prd/etopet/app...')
#2 /prd/etopet/system/classes/kohana/view.php(343): Kohana_View::capture('/prd/etopet/app...', Array)
#3 /prd/etopet/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /prd/etopet/application/views/eto/game.php(21): Kohana_View->__toString()
#5 /prd/etopet/system/classes/kohana/view.php(61): include('/prd/etopet/app...')
#6 /prd/etopet/system/classes/kohana/view.php(343): Kohana_View::capture('/prd/etopet/app...', Array)
#7 /prd/etopet/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /prd/etopet/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#10 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /prd/etopet/index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-11 03:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/chat.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 03:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/chat.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 03:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: socket.io/socket.io.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 03:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: socket.io/socket.io.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 03:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: socket.io/socket.io.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 03:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: socket.io/socket.io.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 03:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/chat.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 03:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascripts/chat.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 03:04:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: socket.io/1 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 03:04:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: socket.io/1 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 08:52:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: pr_tpl ~ APPPATH/views/stg2/game.php [ 101 ]
2013-04-11 08:52:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: pr_tpl ~ APPPATH/views/stg2/game.php [ 101 ]
--
#0 /prd/etopet/application/views/stg2/game.php(101): Kohana_Core::error_handler(8, 'Undefined varia...', '/prd/etopet/app...', 101, Array)
#1 /prd/etopet/system/classes/kohana/view.php(61): include('/prd/etopet/app...')
#2 /prd/etopet/system/classes/kohana/view.php(343): Kohana_View::capture('/prd/etopet/app...', Array)
#3 /prd/etopet/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /prd/etopet/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Stg2))
#6 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /prd/etopet/index.php(109): Kohana_Request->execute()
#9 {main}
2013-04-11 08:52:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 08:52:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 08:54:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 08:54:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 08:54:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: game_pass ~ APPPATH/views/eto/play.php [ 17 ]
2013-04-11 08:54:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: game_pass ~ APPPATH/views/eto/play.php [ 17 ]
--
#0 /prd/etopet/application/views/eto/play.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/prd/etopet/app...', 17, Array)
#1 /prd/etopet/system/classes/kohana/view.php(61): include('/prd/etopet/app...')
#2 /prd/etopet/system/classes/kohana/view.php(343): Kohana_View::capture('/prd/etopet/app...', Array)
#3 /prd/etopet/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /prd/etopet/application/views/eto/game.php(21): Kohana_View->__toString()
#5 /prd/etopet/system/classes/kohana/view.php(61): include('/prd/etopet/app...')
#6 /prd/etopet/system/classes/kohana/view.php(343): Kohana_View::capture('/prd/etopet/app...', Array)
#7 /prd/etopet/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /prd/etopet/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#10 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /prd/etopet/index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-11 09:07:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 09:07:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 09:09:08 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
2013-04-11 09:09:08 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /prd/etopet/application/classes/model/stg1.php(87): Kohana_View->__get('content')
#1 /prd/etopet/application/classes/controller/main.php(30): Model_Stg1->main()
#2 [internal function]: Controller_Main->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-11 09:12:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 09:12:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 09:12:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 09:12:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 09:16:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 09:16:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 09:16:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 09:16:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 09:16:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 09:16:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 09:16:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 09:16:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 09:16:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 09:16:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 09:16:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 09:16:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 09:17:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 09:17:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 09:17:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 09:17:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 09:17:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 09:17:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 09:18:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 09:18:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 09:18:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 09:18:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 09:20:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 09:20:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 09:21:15 --- ERROR: Kohana_Exception [ 0 ]: The level property does not exist in the Model_Status class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2013-04-11 09:21:15 --- STRACE: Kohana_Exception [ 0 ]: The level property does not exist in the Model_Status class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /prd/etopet/application/classes/model/stg1.php(38): Kohana_ORM->__get('level')
#1 /prd/etopet/application/classes/controller/main.php(30): Model_Stg1->main()
#2 [internal function]: Controller_Main->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-11 09:21:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 09:21:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 09:22:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 09:22:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 09:27:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 09:27:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 09:27:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 09:27:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 09:27:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 09:27:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 09:30:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-11 09:30:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}