<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-04-16 04:15:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-16 04:15:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-16 09:29:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-16 09:29:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-16 09:30:09 --- ERROR: Kohana_Exception [ 0 ]: The level property does not exist in the Model_Status class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2013-04-16 09:30:09 --- STRACE: Kohana_Exception [ 0 ]: The level property does not exist in the Model_Status class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /prd/etopet/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('level', 1)
#1 /prd/etopet/application/classes/controller/in/usr.php(35): Kohana_ORM->__set('level', 1)
#2 /prd/etopet/application/classes/controller/in/usr.php(7): Controller_In_Usr->login()
#3 [internal function]: Controller_In_Usr->action_index()
#4 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Usr))
#5 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /prd/etopet/index.php(109): Kohana_Request->execute()
#8 {main}
2013-04-16 09:30:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-16 09:30:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-16 09:34:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_Lv1' not found ~ APPPATH/classes/controller/in/resquiz.php [ 20 ]
2013-04-16 09:34:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_Lv1' not found ~ APPPATH/classes/controller/in/resquiz.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-04-16 09:35:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_Lv1' not found ~ APPPATH/classes/controller/in/resquiz.php [ 20 ]
2013-04-16 09:35:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_Lv1' not found ~ APPPATH/classes/controller/in/resquiz.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-04-16 09:36:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-16 09:36:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-16 09:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-16 09:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-16 09:40:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_Lv1' not found ~ APPPATH/classes/controller/in/resquiz.php [ 20 ]
2013-04-16 09:40:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_Lv1' not found ~ APPPATH/classes/controller/in/resquiz.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-04-16 09:40:41 --- ERROR: ErrorException [ 1 ]: Class 'Model_Lv1' not found ~ APPPATH/classes/controller/in/resquiz.php [ 20 ]
2013-04-16 09:40:41 --- STRACE: ErrorException [ 1 ]: Class 'Model_Lv1' not found ~ APPPATH/classes/controller/in/resquiz.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-04-16 17:11:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-16 17:11:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-16 20:06:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-16 20:06:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-16 20:07:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-16 20:07:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-16 20:08:30 --- ERROR: Kohana_Exception [ 0 ]: The level property does not exist in the Model_Status class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2013-04-16 20:08:30 --- STRACE: Kohana_Exception [ 0 ]: The level property does not exist in the Model_Status class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /prd/etopet/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('level', 1)
#1 /prd/etopet/application/classes/controller/in/usr.php(35): Kohana_ORM->__set('level', 1)
#2 /prd/etopet/application/classes/controller/in/usr.php(7): Controller_In_Usr->login()
#3 [internal function]: Controller_In_Usr->action_index()
#4 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Usr))
#5 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /prd/etopet/index.php(109): Kohana_Request->execute()
#8 {main}
2013-04-16 20:10:21 --- ERROR: Kohana_Exception [ 0 ]: The level property does not exist in the Model_Status class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2013-04-16 20:10:21 --- STRACE: Kohana_Exception [ 0 ]: The level property does not exist in the Model_Status class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /prd/etopet/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('level', 1)
#1 /prd/etopet/application/classes/controller/in/usr.php(35): Kohana_ORM->__set('level', 1)
#2 /prd/etopet/application/classes/controller/in/usr.php(7): Controller_In_Usr->login()
#3 [internal function]: Controller_In_Usr->action_index()
#4 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Usr))
#5 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /prd/etopet/index.php(109): Kohana_Request->execute()
#8 {main}
2013-04-16 20:10:46 --- ERROR: Kohana_Exception [ 0 ]: The level property does not exist in the Model_Status class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2013-04-16 20:10:46 --- STRACE: Kohana_Exception [ 0 ]: The level property does not exist in the Model_Status class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /prd/etopet/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('level', 1)
#1 /prd/etopet/application/classes/controller/in/usr.php(35): Kohana_ORM->__set('level', 1)
#2 /prd/etopet/application/classes/controller/in/usr.php(7): Controller_In_Usr->login()
#3 [internal function]: Controller_In_Usr->action_index()
#4 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Usr))
#5 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /prd/etopet/index.php(109): Kohana_Request->execute()
#8 {main}
2013-04-16 20:12:01 --- ERROR: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Status class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2013-04-16 20:12:01 --- STRACE: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Status class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /prd/etopet/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('id', '21')
#1 /prd/etopet/application/classes/controller/in/usr.php(38): Kohana_ORM->__set('id', '21')
#2 /prd/etopet/application/classes/controller/in/usr.php(7): Controller_In_Usr->login()
#3 [internal function]: Controller_In_Usr->action_index()
#4 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Usr))
#5 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /prd/etopet/index.php(109): Kohana_Request->execute()
#8 {main}
2013-04-16 20:12:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-16 20:12:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-16 20:19:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_Lv1' not found ~ APPPATH/classes/controller/in/resquiz.php [ 20 ]
2013-04-16 20:19:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_Lv1' not found ~ APPPATH/classes/controller/in/resquiz.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-04-16 20:20:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_Lv1' not found ~ APPPATH/classes/controller/in/resquiz.php [ 20 ]
2013-04-16 20:20:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_Lv1' not found ~ APPPATH/classes/controller/in/resquiz.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-04-16 20:20:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_Lv1' not found ~ APPPATH/classes/controller/in/resquiz.php [ 20 ]
2013-04-16 20:20:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_Lv1' not found ~ APPPATH/classes/controller/in/resquiz.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-04-16 20:20:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_Lv1' not found ~ APPPATH/classes/controller/in/resquiz.php [ 20 ]
2013-04-16 20:20:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_Lv1' not found ~ APPPATH/classes/controller/in/resquiz.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-04-16 20:21:36 --- ERROR: ErrorException [ 8 ]: Uninitialized string offset: 2 ~ APPPATH/classes/model/stg1.php [ 161 ]
2013-04-16 20:21:36 --- STRACE: ErrorException [ 8 ]: Uninitialized string offset: 2 ~ APPPATH/classes/model/stg1.php [ 161 ]
--
#0 /prd/etopet/application/classes/model/stg1.php(161): Kohana_Core::error_handler(8, 'Uninitialized s...', '/prd/etopet/app...', 161, Array)
#1 /prd/etopet/application/classes/controller/in/resquiz.php(31): Model_Stg1->resquiz()
#2 [internal function]: Controller_In_Resquiz->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Resquiz))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-16 20:23:17 --- ERROR: ErrorException [ 8 ]: Uninitialized string offset: 2 ~ APPPATH/classes/model/stg1.php [ 161 ]
2013-04-16 20:23:17 --- STRACE: ErrorException [ 8 ]: Uninitialized string offset: 2 ~ APPPATH/classes/model/stg1.php [ 161 ]
--
#0 /prd/etopet/application/classes/model/stg1.php(161): Kohana_Core::error_handler(8, 'Uninitialized s...', '/prd/etopet/app...', 161, Array)
#1 /prd/etopet/application/classes/controller/in/resquiz.php(31): Model_Stg1->resquiz()
#2 [internal function]: Controller_In_Resquiz->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Resquiz))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-16 20:23:33 --- ERROR: ErrorException [ 8 ]: Uninitialized string offset: 2 ~ APPPATH/classes/model/stg1.php [ 162 ]
2013-04-16 20:23:33 --- STRACE: ErrorException [ 8 ]: Uninitialized string offset: 2 ~ APPPATH/classes/model/stg1.php [ 162 ]
--
#0 /prd/etopet/application/classes/model/stg1.php(162): Kohana_Core::error_handler(8, 'Uninitialized s...', '/prd/etopet/app...', 162, Array)
#1 /prd/etopet/application/classes/controller/in/resquiz.php(31): Model_Stg1->resquiz()
#2 [internal function]: Controller_In_Resquiz->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Resquiz))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-16 20:24:44 --- ERROR: ErrorException [ 8 ]: Uninitialized string offset: 1 ~ APPPATH/classes/model/stg1.php [ 162 ]
2013-04-16 20:24:44 --- STRACE: ErrorException [ 8 ]: Uninitialized string offset: 1 ~ APPPATH/classes/model/stg1.php [ 162 ]
--
#0 /prd/etopet/application/classes/model/stg1.php(162): Kohana_Core::error_handler(8, 'Uninitialized s...', '/prd/etopet/app...', 162, Array)
#1 /prd/etopet/application/classes/controller/in/resquiz.php(31): Model_Stg1->resquiz()
#2 [internal function]: Controller_In_Resquiz->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Resquiz))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-16 20:25:24 --- ERROR: ErrorException [ 8 ]: Uninitialized string offset: 1 ~ APPPATH/classes/model/stg1.php [ 162 ]
2013-04-16 20:25:24 --- STRACE: ErrorException [ 8 ]: Uninitialized string offset: 1 ~ APPPATH/classes/model/stg1.php [ 162 ]
--
#0 /prd/etopet/application/classes/model/stg1.php(162): Kohana_Core::error_handler(8, 'Uninitialized s...', '/prd/etopet/app...', 162, Array)
#1 /prd/etopet/application/classes/controller/in/resquiz.php(31): Model_Stg1->resquiz()
#2 [internal function]: Controller_In_Resquiz->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Resquiz))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-16 20:27:07 --- ERROR: ErrorException [ 8 ]: Uninitialized string offset: 2 ~ APPPATH/classes/model/stg1.php [ 162 ]
2013-04-16 20:27:07 --- STRACE: ErrorException [ 8 ]: Uninitialized string offset: 2 ~ APPPATH/classes/model/stg1.php [ 162 ]
--
#0 /prd/etopet/application/classes/model/stg1.php(162): Kohana_Core::error_handler(8, 'Uninitialized s...', '/prd/etopet/app...', 162, Array)
#1 /prd/etopet/application/classes/controller/in/resquiz.php(31): Model_Stg1->resquiz()
#2 [internal function]: Controller_In_Resquiz->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Resquiz))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-16 20:30:42 --- ERROR: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/kohana/orm.php [ 909 ]
2013-04-16 20:30:42 --- STRACE: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/kohana/orm.php [ 909 ]
--
#0 /prd/etopet/application/classes/model/stg1.php(172): Kohana_ORM->find_all()
#1 /prd/etopet/application/classes/controller/in/resquiz.php(31): Model_Stg1->resquiz()
#2 [internal function]: Controller_In_Resquiz->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Resquiz))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-16 20:32:25 --- ERROR: ErrorException [ 8 ]: Undefined index: level ~ APPPATH/views/third/res_quiz.php [ 12 ]
2013-04-16 20:32:25 --- STRACE: ErrorException [ 8 ]: Undefined index: level ~ APPPATH/views/third/res_quiz.php [ 12 ]
--
#0 /prd/etopet/application/views/third/res_quiz.php(12): Kohana_Core::error_handler(8, 'Undefined index...', '/prd/etopet/app...', 12, Array)
#1 /prd/etopet/system/classes/kohana/view.php(61): include('/prd/etopet/app...')
#2 /prd/etopet/system/classes/kohana/view.php(343): Kohana_View::capture('/prd/etopet/app...', Array)
#3 /prd/etopet/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /prd/etopet/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_In_Resquiz))
#6 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /prd/etopet/index.php(109): Kohana_Request->execute()
#9 {main}
2013-04-16 20:32:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/ ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-16 20:32:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/ ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-16 20:35:18 --- ERROR: ErrorException [ 8 ]: Undefined index: level ~ APPPATH/views/third/res_quiz.php [ 16 ]
2013-04-16 20:35:18 --- STRACE: ErrorException [ 8 ]: Undefined index: level ~ APPPATH/views/third/res_quiz.php [ 16 ]
--
#0 /prd/etopet/application/views/third/res_quiz.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/prd/etopet/app...', 16, Array)
#1 /prd/etopet/system/classes/kohana/view.php(61): include('/prd/etopet/app...')
#2 /prd/etopet/system/classes/kohana/view.php(343): Kohana_View::capture('/prd/etopet/app...', Array)
#3 /prd/etopet/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /prd/etopet/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_In_Resquiz))
#6 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /prd/etopet/index.php(109): Kohana_Request->execute()
#9 {main}
2013-04-16 20:35:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/ ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-16 20:35:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/ ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-16 20:36:02 --- ERROR: ErrorException [ 8 ]: Undefined index: level ~ APPPATH/views/third/res_quiz.php [ 17 ]
2013-04-16 20:36:02 --- STRACE: ErrorException [ 8 ]: Undefined index: level ~ APPPATH/views/third/res_quiz.php [ 17 ]
--
#0 /prd/etopet/application/views/third/res_quiz.php(17): Kohana_Core::error_handler(8, 'Undefined index...', '/prd/etopet/app...', 17, Array)
#1 /prd/etopet/system/classes/kohana/view.php(61): include('/prd/etopet/app...')
#2 /prd/etopet/system/classes/kohana/view.php(343): Kohana_View::capture('/prd/etopet/app...', Array)
#3 /prd/etopet/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /prd/etopet/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_In_Resquiz))
#6 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /prd/etopet/index.php(109): Kohana_Request->execute()
#9 {main}
2013-04-16 20:36:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/ ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-16 20:36:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/ ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-16 20:36:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-16 20:36:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-16 21:41:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/3.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-16 21:41:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/3.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-16 21:41:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-16 21:41:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-16 21:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/3.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-16 21:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/3.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-16 22:11:25 --- ERROR: Kohana_Exception [ 0 ]: The img property does not exist in the Model_Status class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2013-04-16 22:11:25 --- STRACE: Kohana_Exception [ 0 ]: The img property does not exist in the Model_Status class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /prd/etopet/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('img', 'https://users.k...')
#1 /prd/etopet/application/classes/model/stg1.php(110): Kohana_ORM->__set('img', 'https://users.k...')
#2 /prd/etopet/application/classes/controller/in/resquiz.php(31): Model_Stg1->resquiz()
#3 [internal function]: Controller_In_Resquiz->action_index()
#4 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Resquiz))
#5 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /prd/etopet/index.php(109): Kohana_Request->execute()
#8 {main}
2013-04-16 22:19:52 --- ERROR: Kohana_Exception [ 0 ]: The img property does not exist in the Model_Status class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2013-04-16 22:19:52 --- STRACE: Kohana_Exception [ 0 ]: The img property does not exist in the Model_Status class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /prd/etopet/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('img', 'https://users.k...')
#1 /prd/etopet/application/classes/model/stg1.php(110): Kohana_ORM->__set('img', 'https://users.k...')
#2 /prd/etopet/application/classes/controller/in/resquiz.php(31): Model_Stg1->resquiz()
#3 [internal function]: Controller_In_Resquiz->action_index()
#4 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Resquiz))
#5 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /prd/etopet/index.php(109): Kohana_Request->execute()
#8 {main}
2013-04-16 22:22:43 --- ERROR: Kohana_Exception [ 0 ]: The img property does not exist in the Model_Status class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2013-04-16 22:22:43 --- STRACE: Kohana_Exception [ 0 ]: The img property does not exist in the Model_Status class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /prd/etopet/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('img', 'https://users.k...')
#1 /prd/etopet/application/classes/model/stg1.php(110): Kohana_ORM->__set('img', 'https://users.k...')
#2 /prd/etopet/application/classes/controller/in/resquiz.php(31): Model_Stg1->resquiz()
#3 [internal function]: Controller_In_Resquiz->action_index()
#4 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Resquiz))
#5 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /prd/etopet/index.php(109): Kohana_Request->execute()
#8 {main}
2013-04-16 23:28:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-16 23:28:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-16 23:28:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-16 23:28:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-16 23:28:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-16 23:28:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-16 23:41:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-16 23:41:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-16 23:41:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-16 23:41:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-16 23:41:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-16 23:41:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}