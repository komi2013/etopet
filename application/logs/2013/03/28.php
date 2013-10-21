<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-03-28 16:08:48 --- ERROR: ErrorException [ 1 ]: Class 'Model_Status' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2013-03-28 16:08:48 --- STRACE: ErrorException [ 1 ]: Class 'Model_Status' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-28 16:10:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: status ~ APPPATH/classes/model/status1to3.php [ 10 ]
2013-03-28 16:10:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: status ~ APPPATH/classes/model/status1to3.php [ 10 ]
--
#0 /prd/etopet/application/classes/model/status1to3.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/prd/etopet/app...', 10, Array)
#1 /prd/etopet/application/classes/controller/main.php(18): Model_Status1to3->func()
#2 [internal function]: Controller_Main->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-28 16:11:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: status ~ APPPATH/classes/model/status1to3.php [ 10 ]
2013-03-28 16:11:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: status ~ APPPATH/classes/model/status1to3.php [ 10 ]
--
#0 /prd/etopet/application/classes/model/status1to3.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/prd/etopet/app...', 10, Array)
#1 /prd/etopet/application/classes/controller/main.php(18): Model_Status1to3->func()
#2 [internal function]: Controller_Main->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-28 16:26:30 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Status1to3::$request ~ APPPATH/classes/model/status1to3.php [ 15 ]
2013-03-28 16:26:30 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Status1to3::$request ~ APPPATH/classes/model/status1to3.php [ 15 ]
--
#0 /prd/etopet/application/classes/model/status1to3.php(15): Kohana_Core::error_handler(8, 'Undefined prope...', '/prd/etopet/app...', 15, Array)
#1 /prd/etopet/application/classes/controller/main.php(19): Model_Status1to3->func()
#2 [internal function]: Controller_Main->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-28 16:27:54 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
2013-03-28 16:27:54 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /prd/etopet/application/classes/controller/main.php(103): Kohana_View->__get('content')
#1 [internal function]: Controller_Main->action_index()
#2 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /prd/etopet/index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-28 16:29:50 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Status1to3::$session ~ APPPATH/classes/model/status1to3.php [ 81 ]
2013-03-28 16:29:50 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Status1to3::$session ~ APPPATH/classes/model/status1to3.php [ 81 ]
--
#0 /prd/etopet/application/classes/model/status1to3.php(81): Kohana_Core::error_handler(8, 'Undefined prope...', '/prd/etopet/app...', 81, Array)
#1 /prd/etopet/application/classes/controller/main.php(20): Model_Status1to3->func()
#2 [internal function]: Controller_Main->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-28 16:31:03 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
2013-03-28 16:31:03 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /prd/etopet/application/classes/controller/main.php(104): Kohana_View->__get('content')
#1 [internal function]: Controller_Main->action_index()
#2 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /prd/etopet/index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-28 16:35:14 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
2013-03-28 16:35:14 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /prd/etopet/application/classes/controller/main.php(104): Kohana_View->__get('content')
#1 [internal function]: Controller_Main->action_index()
#2 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /prd/etopet/index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-28 16:35:30 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
2013-03-28 16:35:30 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /prd/etopet/application/classes/controller/main.php(104): Kohana_View->__get('content')
#1 [internal function]: Controller_Main->action_index()
#2 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /prd/etopet/index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-28 16:36:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/eto/template.php [ 61 ]
2013-03-28 16:36:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/eto/template.php [ 61 ]
--
#0 /prd/etopet/application/views/eto/template.php(61): Kohana_Core::error_handler(8, 'Undefined varia...', '/prd/etopet/app...', 61, Array)
#1 /prd/etopet/system/classes/kohana/view.php(61): include('/prd/etopet/app...')
#2 /prd/etopet/system/classes/kohana/view.php(343): Kohana_View::capture('/prd/etopet/app...', Array)
#3 /prd/etopet/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /prd/etopet/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#6 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /prd/etopet/index.php(109): Kohana_Request->execute()
#9 {main}
2013-03-28 16:41:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-28 16:41:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-28 16:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-28 16:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-28 16:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-28 16:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-28 16:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-28 16:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-28 16:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-28 16:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-28 16:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-28 16:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-28 16:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-28 16:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-28 16:46:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-28 16:46:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-28 16:46:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-28 16:46:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-28 16:50:01 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Main::$pv_u_id ~ APPPATH/classes/controller/main.php [ 11 ]
2013-03-28 16:50:01 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Main::$pv_u_id ~ APPPATH/classes/controller/main.php [ 11 ]
--
#0 /prd/etopet/application/classes/controller/main.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', '/prd/etopet/app...', 11, Array)
#1 [internal function]: Controller_Main->action_index()
#2 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /prd/etopet/index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-28 16:50:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-28 16:50:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-28 16:50:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-28 16:50:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-28 17:48:42 --- ERROR: ErrorException [ 2 ]: array_fill(): Number of elements must be positive ~ MODPATH/orm/classes/kohana/orm.php [ 411 ]
2013-03-28 17:48:42 --- STRACE: ErrorException [ 2 ]: array_fill(): Number of elements must be positive ~ MODPATH/orm/classes/kohana/orm.php [ 411 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_fill(): N...', '/prd/etopet/mod...', 411, Array)
#1 /prd/etopet/modules/orm/classes/kohana/orm.php(411): array_fill(0, 0, NULL)
#2 /prd/etopet/modules/orm/classes/kohana/orm.php(340): Kohana_ORM->clear()
#3 /prd/etopet/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#4 /prd/etopet/application/classes/controller/main.php(16): Kohana_ORM->__construct()
#5 [internal function]: Controller_Main->action_index()
#6 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#7 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /prd/etopet/index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-28 17:50:21 --- ERROR: ErrorException [ 2 ]: array_fill(): Number of elements must be positive ~ MODPATH/orm/classes/kohana/orm.php [ 411 ]
2013-03-28 17:50:21 --- STRACE: ErrorException [ 2 ]: array_fill(): Number of elements must be positive ~ MODPATH/orm/classes/kohana/orm.php [ 411 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_fill(): N...', '/prd/etopet/mod...', 411, Array)
#1 /prd/etopet/modules/orm/classes/kohana/orm.php(411): array_fill(0, 0, NULL)
#2 /prd/etopet/modules/orm/classes/kohana/orm.php(340): Kohana_ORM->clear()
#3 /prd/etopet/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#4 /prd/etopet/application/classes/controller/main.php(16): Kohana_ORM->__construct()
#5 [internal function]: Controller_Main->action_index()
#6 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#7 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /prd/etopet/index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-28 17:50:45 --- ERROR: ErrorException [ 2 ]: array_fill(): Number of elements must be positive ~ MODPATH/orm/classes/kohana/orm.php [ 411 ]
2013-03-28 17:50:45 --- STRACE: ErrorException [ 2 ]: array_fill(): Number of elements must be positive ~ MODPATH/orm/classes/kohana/orm.php [ 411 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_fill(): N...', '/prd/etopet/mod...', 411, Array)
#1 /prd/etopet/modules/orm/classes/kohana/orm.php(411): array_fill(0, 0, NULL)
#2 /prd/etopet/modules/orm/classes/kohana/orm.php(340): Kohana_ORM->clear()
#3 /prd/etopet/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#4 /prd/etopet/application/classes/controller/main.php(16): Kohana_ORM->__construct()
#5 [internal function]: Controller_Main->action_index()
#6 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#7 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /prd/etopet/index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-28 17:52:21 --- ERROR: ErrorException [ 2 ]: array_fill(): Number of elements must be positive ~ MODPATH/orm/classes/kohana/orm.php [ 411 ]
2013-03-28 17:52:21 --- STRACE: ErrorException [ 2 ]: array_fill(): Number of elements must be positive ~ MODPATH/orm/classes/kohana/orm.php [ 411 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_fill(): N...', '/prd/etopet/mod...', 411, Array)
#1 /prd/etopet/modules/orm/classes/kohana/orm.php(411): array_fill(0, 0, NULL)
#2 /prd/etopet/modules/orm/classes/kohana/orm.php(340): Kohana_ORM->clear()
#3 /prd/etopet/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#4 /prd/etopet/application/classes/controller/main.php(16): Kohana_ORM->__construct()
#5 [internal function]: Controller_Main->action_index()
#6 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#7 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /prd/etopet/index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-28 17:52:36 --- ERROR: ErrorException [ 2 ]: array_fill(): Number of elements must be positive ~ MODPATH/orm/classes/kohana/orm.php [ 411 ]
2013-03-28 17:52:36 --- STRACE: ErrorException [ 2 ]: array_fill(): Number of elements must be positive ~ MODPATH/orm/classes/kohana/orm.php [ 411 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_fill(): N...', '/prd/etopet/mod...', 411, Array)
#1 /prd/etopet/modules/orm/classes/kohana/orm.php(411): array_fill(0, 0, NULL)
#2 /prd/etopet/modules/orm/classes/kohana/orm.php(340): Kohana_ORM->clear()
#3 /prd/etopet/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#4 /prd/etopet/application/classes/controller/main.php(16): Kohana_ORM->__construct()
#5 [internal function]: Controller_Main->action_index()
#6 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#7 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /prd/etopet/index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-28 17:52:52 --- ERROR: ErrorException [ 2 ]: array_fill(): Number of elements must be positive ~ MODPATH/orm/classes/kohana/orm.php [ 411 ]
2013-03-28 17:52:52 --- STRACE: ErrorException [ 2 ]: array_fill(): Number of elements must be positive ~ MODPATH/orm/classes/kohana/orm.php [ 411 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_fill(): N...', '/prd/etopet/mod...', 411, Array)
#1 /prd/etopet/modules/orm/classes/kohana/orm.php(411): array_fill(0, 0, NULL)
#2 /prd/etopet/modules/orm/classes/kohana/orm.php(340): Kohana_ORM->clear()
#3 /prd/etopet/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#4 /prd/etopet/application/classes/controller/main.php(16): Kohana_ORM->__construct()
#5 [internal function]: Controller_Main->action_index()
#6 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#7 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /prd/etopet/index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-28 17:53:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: status_level ~ APPPATH/classes/controller/main.php [ 23 ]
2013-03-28 17:53:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: status_level ~ APPPATH/classes/controller/main.php [ 23 ]
--
#0 /prd/etopet/application/classes/controller/main.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/prd/etopet/app...', 23, Array)
#1 [internal function]: Controller_Main->action_index()
#2 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /prd/etopet/index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-28 17:53:35 --- ERROR: ErrorException [ 2 ]: array_fill(): Number of elements must be positive ~ MODPATH/orm/classes/kohana/orm.php [ 411 ]
2013-03-28 17:53:35 --- STRACE: ErrorException [ 2 ]: array_fill(): Number of elements must be positive ~ MODPATH/orm/classes/kohana/orm.php [ 411 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_fill(): N...', '/prd/etopet/mod...', 411, Array)
#1 /prd/etopet/modules/orm/classes/kohana/orm.php(411): array_fill(0, 0, NULL)
#2 /prd/etopet/modules/orm/classes/kohana/orm.php(340): Kohana_ORM->clear()
#3 /prd/etopet/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#4 /prd/etopet/application/classes/controller/main.php(16): Kohana_ORM->__construct()
#5 [internal function]: Controller_Main->action_index()
#6 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#7 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /prd/etopet/index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-28 17:53:47 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/main.php [ 17 ]
2013-03-28 17:53:47 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/main.php [ 17 ]
--
#0 /prd/etopet/application/classes/controller/main.php(17): Kohana_Core::error_handler(2048, 'Creating defaul...', '/prd/etopet/app...', 17, Array)
#1 [internal function]: Controller_Main->action_index()
#2 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /prd/etopet/index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-28 17:55:08 --- ERROR: ErrorException [ 2 ]: array_fill(): Number of elements must be positive ~ MODPATH/orm/classes/kohana/orm.php [ 411 ]
2013-03-28 17:55:08 --- STRACE: ErrorException [ 2 ]: array_fill(): Number of elements must be positive ~ MODPATH/orm/classes/kohana/orm.php [ 411 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_fill(): N...', '/prd/etopet/mod...', 411, Array)
#1 /prd/etopet/modules/orm/classes/kohana/orm.php(411): array_fill(0, 0, NULL)
#2 /prd/etopet/modules/orm/classes/kohana/orm.php(340): Kohana_ORM->clear()
#3 /prd/etopet/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#4 /prd/etopet/application/classes/controller/main.php(16): Kohana_ORM->__construct()
#5 [internal function]: Controller_Main->action_index()
#6 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#7 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /prd/etopet/index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-28 17:55:52 --- ERROR: ErrorException [ 2 ]: array_fill(): Number of elements must be positive ~ MODPATH/orm/classes/kohana/orm.php [ 411 ]
2013-03-28 17:55:52 --- STRACE: ErrorException [ 2 ]: array_fill(): Number of elements must be positive ~ MODPATH/orm/classes/kohana/orm.php [ 411 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_fill(): N...', '/prd/etopet/mod...', 411, Array)
#1 /prd/etopet/modules/orm/classes/kohana/orm.php(411): array_fill(0, 0, NULL)
#2 /prd/etopet/modules/orm/classes/kohana/orm.php(340): Kohana_ORM->clear()
#3 /prd/etopet/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#4 /prd/etopet/application/classes/controller/main.php(16): Kohana_ORM->__construct()
#5 [internal function]: Controller_Main->action_index()
#6 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#7 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /prd/etopet/index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-28 17:56:08 --- ERROR: ErrorException [ 2 ]: array_fill(): Number of elements must be positive ~ MODPATH/orm/classes/kohana/orm.php [ 411 ]
2013-03-28 17:56:08 --- STRACE: ErrorException [ 2 ]: array_fill(): Number of elements must be positive ~ MODPATH/orm/classes/kohana/orm.php [ 411 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_fill(): N...', '/prd/etopet/mod...', 411, Array)
#1 /prd/etopet/modules/orm/classes/kohana/orm.php(411): array_fill(0, 0, NULL)
#2 /prd/etopet/modules/orm/classes/kohana/orm.php(340): Kohana_ORM->clear()
#3 /prd/etopet/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#4 /prd/etopet/application/classes/controller/main.php(16): Kohana_ORM->__construct()
#5 [internal function]: Controller_Main->action_index()
#6 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#7 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /prd/etopet/index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-28 17:56:35 --- ERROR: ErrorException [ 2 ]: array_fill(): Number of elements must be positive ~ MODPATH/orm/classes/kohana/orm.php [ 411 ]
2013-03-28 17:56:35 --- STRACE: ErrorException [ 2 ]: array_fill(): Number of elements must be positive ~ MODPATH/orm/classes/kohana/orm.php [ 411 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_fill(): N...', '/prd/etopet/mod...', 411, Array)
#1 /prd/etopet/modules/orm/classes/kohana/orm.php(411): array_fill(0, 0, NULL)
#2 /prd/etopet/modules/orm/classes/kohana/orm.php(340): Kohana_ORM->clear()
#3 /prd/etopet/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#4 /prd/etopet/application/classes/controller/main.php(16): Kohana_ORM->__construct()
#5 [internal function]: Controller_Main->action_index()
#6 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#7 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /prd/etopet/index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-28 17:57:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: mt_level ~ APPPATH/classes/model/status1to3.php [ 19 ]
2013-03-28 17:57:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: mt_level ~ APPPATH/classes/model/status1to3.php [ 19 ]
--
#0 /prd/etopet/application/classes/model/status1to3.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/prd/etopet/app...', 19, Array)
#1 /prd/etopet/application/classes/controller/main.php(21): Model_Status1to3->func()
#2 [internal function]: Controller_Main->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-28 17:59:18 --- ERROR: Kohana_Exception [ 0 ]: The status property does not exist in the Model_Status1to3 class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2013-03-28 17:59:18 --- STRACE: Kohana_Exception [ 0 ]: The status property does not exist in the Model_Status1to3 class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /prd/etopet/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('status', Object(Model_Status))
#1 /prd/etopet/application/classes/controller/main.php(17): Kohana_ORM->__set('status', Object(Model_Status))
#2 [internal function]: Controller_Main->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-28 18:00:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: mt_level1_3 ~ APPPATH/classes/model/status1to3.php [ 19 ]
2013-03-28 18:00:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: mt_level1_3 ~ APPPATH/classes/model/status1to3.php [ 19 ]
--
#0 /prd/etopet/application/classes/model/status1to3.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/prd/etopet/app...', 19, Array)
#1 /prd/etopet/application/classes/controller/main.php(21): Model_Status1to3->func()
#2 [internal function]: Controller_Main->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-28 18:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-28 18:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-28 18:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-28 18:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}