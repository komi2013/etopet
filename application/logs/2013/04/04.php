<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-04-04 06:57:49 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/main.php [ 26 ]
2013-04-04 06:57:49 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/main.php [ 26 ]
--
#0 /prd/etopet/application/classes/controller/main.php(26): Kohana_Core::error_handler(2048, 'Creating defaul...', '/prd/etopet/app...', 26, Array)
#1 [internal function]: Controller_Main->action_index()
#2 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /prd/etopet/index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-04 06:58:45 --- ERROR: ErrorException [ 1 ]: Class 'Stg1' not found ~ APPPATH/classes/model/stg2.php [ 3 ]
2013-04-04 06:58:45 --- STRACE: ErrorException [ 1 ]: Class 'Stg1' not found ~ APPPATH/classes/model/stg2.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-04-04 06:59:31 --- ERROR: View_Exception [ 0 ]: The requested view stg2/template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-04-04 06:59:31 --- STRACE: View_Exception [ 0 ]: The requested view stg2/template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /prd/etopet/system/classes/kohana/view.php(137): Kohana_View->set_filename('stg2/template')
#1 /prd/etopet/system/classes/kohana/view.php(30): Kohana_View->__construct('stg2/template', NULL)
#2 /prd/etopet/application/classes/model/stg2.php(9): Kohana_View::factory('stg2/template')
#3 /prd/etopet/application/classes/controller/main.php(30): Model_Stg2->main()
#4 [internal function]: Controller_Main->action_index()
#5 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#6 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /prd/etopet/index.php(109): Kohana_Request->execute()
#9 {main}
2013-04-04 07:03:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: pet ~ APPPATH/views/stg2/main.php [ 10 ]
2013-04-04 07:03:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: pet ~ APPPATH/views/stg2/main.php [ 10 ]
--
#0 /prd/etopet/application/views/stg2/main.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/prd/etopet/app...', 10, Array)
#1 /prd/etopet/system/classes/kohana/view.php(61): include('/prd/etopet/app...')
#2 /prd/etopet/system/classes/kohana/view.php(343): Kohana_View::capture('/prd/etopet/app...', Array)
#3 /prd/etopet/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /prd/etopet/application/views/stg2/template.php(79): Kohana_View->__toString()
#5 /prd/etopet/system/classes/kohana/view.php(61): include('/prd/etopet/app...')
#6 /prd/etopet/system/classes/kohana/view.php(343): Kohana_View::capture('/prd/etopet/app...', Array)
#7 /prd/etopet/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /prd/etopet/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#10 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /prd/etopet/index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-04 07:03:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: pet ~ APPPATH/views/stg2/main.php [ 10 ]
2013-04-04 07:03:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: pet ~ APPPATH/views/stg2/main.php [ 10 ]
--
#0 /prd/etopet/application/views/stg2/main.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/prd/etopet/app...', 10, Array)
#1 /prd/etopet/system/classes/kohana/view.php(61): include('/prd/etopet/app...')
#2 /prd/etopet/system/classes/kohana/view.php(343): Kohana_View::capture('/prd/etopet/app...', Array)
#3 /prd/etopet/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /prd/etopet/application/views/stg2/template.php(79): Kohana_View->__toString()
#5 /prd/etopet/system/classes/kohana/view.php(61): include('/prd/etopet/app...')
#6 /prd/etopet/system/classes/kohana/view.php(343): Kohana_View::capture('/prd/etopet/app...', Array)
#7 /prd/etopet/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /prd/etopet/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#10 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /prd/etopet/index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-04 07:23:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/game/stg2/index.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-04 07:23:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/game/stg2/index.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-04 07:25:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/stg2/game.php [ 19 ]
2013-04-04 07:25:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/stg2/game.php [ 19 ]
--
#0 /prd/etopet/application/views/stg2/game.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/prd/etopet/app...', 19, Array)
#1 /prd/etopet/system/classes/kohana/view.php(61): include('/prd/etopet/app...')
#2 /prd/etopet/system/classes/kohana/view.php(343): Kohana_View::capture('/prd/etopet/app...', Array)
#3 /prd/etopet/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /prd/etopet/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Testgame))
#6 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /prd/etopet/index.php(109): Kohana_Request->execute()
#9 {main}
2013-04-04 07:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-04 07:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-04 07:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/index.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-04 07:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/index.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-04 07:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/index.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-04 07:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/index.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-04 07:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-04 07:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-04 07:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/index.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-04 07:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/index.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-04 07:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/index.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-04 07:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/index.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-04 07:28:44 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
2013-04-04 07:28:44 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /prd/etopet/application/classes/model/stg2.php(56): Kohana_View->__get('content')
#1 /prd/etopet/application/classes/controller/main.php(30): Model_Stg2->main()
#2 [internal function]: Controller_Main->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-04 07:29:13 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
2013-04-04 07:29:13 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /prd/etopet/application/classes/model/stg2.php(56): Kohana_View->__get('content')
#1 /prd/etopet/application/classes/controller/main.php(30): Model_Stg2->main()
#2 [internal function]: Controller_Main->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-04 07:31:02 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
2013-04-04 07:31:02 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /prd/etopet/application/classes/model/stg2.php(56): Kohana_View->__get('content')
#1 /prd/etopet/application/classes/controller/main.php(30): Model_Stg2->main()
#2 [internal function]: Controller_Main->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-04 07:32:01 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
2013-04-04 07:32:01 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /prd/etopet/application/classes/model/stg2.php(56): Kohana_View->__get('content')
#1 /prd/etopet/application/classes/controller/main.php(30): Model_Stg2->main()
#2 [internal function]: Controller_Main->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-04 07:32:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-04 07:32:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-04 07:32:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/index.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-04 07:32:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/index.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-04 07:32:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/index.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-04 07:32:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/index.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-04 07:33:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-04 07:33:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-04 07:33:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/index.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-04 07:33:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/index.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-04 07:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/index.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-04 07:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/index.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-04 07:34:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-04 07:34:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-04 07:34:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/index2.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-04 07:34:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/index2.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-04 07:34:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/index2.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-04 07:34:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/index2.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-04 07:39:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-04 07:39:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-04 07:39:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/index2.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-04 07:39:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/index2.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-04 07:39:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/index2.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-04 07:39:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/index2.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-04 07:41:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-04 07:41:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-04 07:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/style.cssk ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-04 07:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/style.cssk ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-04 07:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/index2.jsk ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-04 07:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/index2.jsk ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-04 07:41:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/index2.jsk ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-04 07:41:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/index2.jsk ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-04 07:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-04 07:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/main/play/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-04 07:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/game/stg2/index2.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-04 07:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/game/stg2/index2.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-04 07:42:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/game/stg2/index2.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-04 07:42:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/game/stg2/index2.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-04 07:54:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/game/stg2/indexx.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-04 07:54:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/game/stg2/indexx.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-04 07:54:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/game/stg2/indexx.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-04 07:54:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/game/stg2/indexx.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-04 20:33:55 --- ERROR: View_Exception [ 0 ]: The requested view stg2/base64.php could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-04-04 20:33:55 --- STRACE: View_Exception [ 0 ]: The requested view stg2/base64.php could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /prd/etopet/system/classes/kohana/view.php(137): Kohana_View->set_filename('stg2/base64.php')
#1 /prd/etopet/system/classes/kohana/view.php(30): Kohana_View->__construct('stg2/base64.php', NULL)
#2 /prd/etopet/application/classes/controller/testgame.php(12): Kohana_View::factory('stg2/base64.php')
#3 [internal function]: Controller_Testgame->action_index()
#4 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Testgame))
#5 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /prd/etopet/index.php(109): Kohana_Request->execute()
#8 {main}
2013-04-04 21:21:25 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting ',' or ';' ~ APPPATH/classes/controller/testgame.php [ 16 ]
2013-04-04 21:21:25 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting ',' or ';' ~ APPPATH/classes/controller/testgame.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}