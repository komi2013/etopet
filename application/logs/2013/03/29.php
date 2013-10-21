<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-03-29 10:14:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_Usr' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2013-03-29 10:14:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_Usr' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-29 10:37:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_Pet' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2013-03-29 10:37:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_Pet' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-29 10:37:57 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Lv1to3::$status ~ APPPATH/classes/model/lv1to3.php [ 18 ]
2013-03-29 10:37:57 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Lv1to3::$status ~ APPPATH/classes/model/lv1to3.php [ 18 ]
--
#0 /prd/etopet/application/classes/model/lv1to3.php(18): Kohana_Core::error_handler(8, 'Undefined prope...', '/prd/etopet/app...', 18, Array)
#1 /prd/etopet/application/classes/controller/main.php(30): Model_Lv1to3->func()
#2 [internal function]: Controller_Main->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-29 10:41:51 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Lv1to3::$status ~ APPPATH/classes/model/lv1to3.php [ 20 ]
2013-03-29 10:41:51 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Lv1to3::$status ~ APPPATH/classes/model/lv1to3.php [ 20 ]
--
#0 /prd/etopet/application/classes/model/lv1to3.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', '/prd/etopet/app...', 20, Array)
#1 /prd/etopet/application/classes/controller/main.php(30): Model_Lv1to3->func()
#2 [internal function]: Controller_Main->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-29 10:42:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: main ~ APPPATH/classes/controller/main.php [ 32 ]
2013-03-29 10:42:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: main ~ APPPATH/classes/controller/main.php [ 32 ]
--
#0 /prd/etopet/application/classes/controller/main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/prd/etopet/app...', 32, Array)
#1 [internal function]: Controller_Main->action_index()
#2 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /prd/etopet/index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-29 10:43:31 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Lv1to3::$status ~ APPPATH/classes/model/lv1to3.php [ 20 ]
2013-03-29 10:43:31 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Lv1to3::$status ~ APPPATH/classes/model/lv1to3.php [ 20 ]
--
#0 /prd/etopet/application/classes/model/lv1to3.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', '/prd/etopet/app...', 20, Array)
#1 /prd/etopet/application/classes/controller/main.php(31): Model_Lv1to3->func()
#2 [internal function]: Controller_Main->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-29 10:43:40 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Lv1to3::$status ~ APPPATH/classes/model/lv1to3.php [ 20 ]
2013-03-29 10:43:40 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Lv1to3::$status ~ APPPATH/classes/model/lv1to3.php [ 20 ]
--
#0 /prd/etopet/application/classes/model/lv1to3.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', '/prd/etopet/app...', 20, Array)
#1 /prd/etopet/application/classes/controller/main.php(31): Model_Lv1to3->func()
#2 [internal function]: Controller_Main->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-29 10:43:52 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Lv1to3::$status ~ APPPATH/classes/model/lv1to3.php [ 20 ]
2013-03-29 10:43:52 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Lv1to3::$status ~ APPPATH/classes/model/lv1to3.php [ 20 ]
--
#0 /prd/etopet/application/classes/model/lv1to3.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', '/prd/etopet/app...', 20, Array)
#1 /prd/etopet/application/classes/controller/main.php(33): Model_Lv1to3->func()
#2 [internal function]: Controller_Main->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-29 10:45:32 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Lv1to3::$status ~ APPPATH/classes/model/lv1to3.php [ 20 ]
2013-03-29 10:45:32 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Lv1to3::$status ~ APPPATH/classes/model/lv1to3.php [ 20 ]
--
#0 /prd/etopet/application/classes/model/lv1to3.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', '/prd/etopet/app...', 20, Array)
#1 /prd/etopet/application/classes/controller/main.php(30): Model_Lv1to3->func()
#2 [internal function]: Controller_Main->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-29 11:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/snake.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 11:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/snake.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 11:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/snake.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 11:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/snake.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 11:01:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 11:01:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 11:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/snake.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 11:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/snake.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 11:08:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: usr ~ APPPATH/classes/model/lv1to3.php [ 28 ]
2013-03-29 11:08:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: usr ~ APPPATH/classes/model/lv1to3.php [ 28 ]
--
#0 /prd/etopet/application/classes/model/lv1to3.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/prd/etopet/app...', 28, Array)
#1 /prd/etopet/application/classes/controller/main.php(30): Model_Lv1to3->func()
#2 [internal function]: Controller_Main->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-29 12:17:49 --- ERROR: Database_Exception [ 0 ]: ERROR:  duplicate key value violates unique constraint "status_pkey"
 [ INSERT INTO "status" ("level", "food", "manpuku", "id", "date") VALUES (1, 1, 1, '4', '20130329') ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
2013-03-29 12:17:49 --- STRACE: Database_Exception [ 0 ]: ERROR:  duplicate key value violates unique constraint "status_pkey"
 [ INSERT INTO "status" ("level", "food", "manpuku", "id", "date") VALUES (1, 1, 1, '4', '20130329') ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
--
#0 /prd/etopet/modules/database/classes/kohana/database/query.php(245): Kohana_Database_PostgreSQL->query(2, 'INSERT INTO "st...', false, Array)
#1 /prd/etopet/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 /prd/etopet/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /prd/etopet/application/classes/controller/in/usr.php(42): Kohana_ORM->save()
#4 /prd/etopet/application/classes/controller/in/usr.php(7): Controller_In_Usr->login()
#5 [internal function]: Controller_In_Usr->action_index()
#6 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Usr))
#7 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /prd/etopet/index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-29 12:18:32 --- ERROR: Database_Exception [ 0 ]: ERROR:  invalid input syntax for integer: "https://users.komahana.info/public/img/profile/phbydtijafhoea5mx50f.jpg"
LINE 1: ...pv_u_id", "pet_id", "name", "date") VALUES ('88', 'https://u...
                                                             ^
 [ INSERT INTO "usr" ("pv_u_id", "pet_id", "name", "date") VALUES ('88', 'https://users.komahana.info/public/img/profile/phbydtijafhoea5mx50f.jpg', 'komi_s', '20130329') ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
2013-03-29 12:18:32 --- STRACE: Database_Exception [ 0 ]: ERROR:  invalid input syntax for integer: "https://users.komahana.info/public/img/profile/phbydtijafhoea5mx50f.jpg"
LINE 1: ...pv_u_id", "pet_id", "name", "date") VALUES ('88', 'https://u...
                                                             ^
 [ INSERT INTO "usr" ("pv_u_id", "pet_id", "name", "date") VALUES ('88', 'https://users.komahana.info/public/img/profile/phbydtijafhoea5mx50f.jpg', 'komi_s', '20130329') ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
--
#0 /prd/etopet/modules/database/classes/kohana/database/query.php(245): Kohana_Database_PostgreSQL->query(2, 'INSERT INTO "us...', false, Array)
#1 /prd/etopet/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 /prd/etopet/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /prd/etopet/application/classes/controller/in/usr.php(49): Kohana_ORM->save()
#4 /prd/etopet/application/classes/controller/in/usr.php(7): Controller_In_Usr->login()
#5 [internal function]: Controller_In_Usr->action_index()
#6 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Usr))
#7 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /prd/etopet/index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-29 12:20:28 --- ERROR: Kohana_Exception [ 0 ]: The pet_id property does not exist in the Model_Status class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2013-03-29 12:20:28 --- STRACE: Kohana_Exception [ 0 ]: The pet_id property does not exist in the Model_Status class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /prd/etopet/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('pet_id', '6')
#1 /prd/etopet/application/classes/model/lv1to3.php(33): Kohana_ORM->__set('pet_id', '6')
#2 /prd/etopet/application/classes/controller/main.php(30): Model_Lv1to3->func()
#3 [internal function]: Controller_Main->action_index()
#4 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#5 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /prd/etopet/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-29 12:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/snake.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 12:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/snake.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 12:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/snake.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 12:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/snake.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 12:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 12:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 12:21:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/eat.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 12:21:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/eat.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 12:21:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 12:21:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 14:14:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/snake.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 14:14:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/snake.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 14:14:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 14:14:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 14:14:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/eat.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 14:14:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/eat.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 14:14:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 14:14:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 14:14:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 14:14:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 14:15:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 14:15:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 14:15:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 14:15:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 14:20:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 14:20:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 14:21:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 14:21:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 14:22:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 14:22:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 16:47:15 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Lv1::$pv_u_id ~ APPPATH/classes/model/lv1.php [ 128 ]
2013-03-29 16:47:15 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Lv1::$pv_u_id ~ APPPATH/classes/model/lv1.php [ 128 ]
--
#0 /prd/etopet/application/classes/model/lv1.php(128): Kohana_Core::error_handler(8, 'Undefined prope...', '/prd/etopet/app...', 128, Array)
#1 /prd/etopet/application/classes/controller/in/resquiz.php(31): Model_Lv1->resquiz()
#2 [internal function]: Controller_In_Resquiz->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Resquiz))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-29 16:47:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 16:47:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 16:52:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 16:52:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 16:53:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 16:53:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 16:54:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 16:54:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 16:54:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 16:54:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 16:56:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 16:56:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 16:57:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 16:57:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 16:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 16:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 16:59:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 16:59:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 16:59:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 16:59:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 17:03:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 17:03:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 17:04:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 17:04:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 17:11:38 --- ERROR: Kohana_Exception [ 0 ]: The maker property does not exist in the Model_ResQuiz class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2013-03-29 17:11:38 --- STRACE: Kohana_Exception [ 0 ]: The maker property does not exist in the Model_ResQuiz class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /prd/etopet/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('maker', '10')
#1 /prd/etopet/application/classes/model/lv1.php(142): Kohana_ORM->__set('maker', '10')
#2 /prd/etopet/application/classes/controller/in/resquiz.php(31): Model_Lv1->resquiz()
#3 [internal function]: Controller_In_Resquiz->action_index()
#4 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Resquiz))
#5 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /prd/etopet/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-29 17:11:54 --- ERROR: Kohana_Exception [ 0 ]: The maker property does not exist in the Model_ResQuiz class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2013-03-29 17:11:54 --- STRACE: Kohana_Exception [ 0 ]: The maker property does not exist in the Model_ResQuiz class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /prd/etopet/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('maker', '10')
#1 /prd/etopet/application/classes/model/lv1.php(142): Kohana_ORM->__set('maker', '10')
#2 /prd/etopet/application/classes/controller/in/resquiz.php(31): Model_Lv1->resquiz()
#3 [internal function]: Controller_In_Resquiz->action_index()
#4 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Resquiz))
#5 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /prd/etopet/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-29 17:19:20 --- ERROR: Kohana_Exception [ 0 ]: The maker property does not exist in the Model_ResQuiz class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2013-03-29 17:19:20 --- STRACE: Kohana_Exception [ 0 ]: The maker property does not exist in the Model_ResQuiz class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /prd/etopet/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('maker', '10')
#1 /prd/etopet/application/classes/model/lv1.php(142): Kohana_ORM->__set('maker', '10')
#2 /prd/etopet/application/classes/controller/in/resquiz.php(31): Model_Lv1->resquiz()
#3 [internal function]: Controller_In_Resquiz->action_index()
#4 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Resquiz))
#5 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /prd/etopet/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-29 17:22:08 --- ERROR: Kohana_Exception [ 0 ]: The maker property does not exist in the Model_ResQuiz class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2013-03-29 17:22:08 --- STRACE: Kohana_Exception [ 0 ]: The maker property does not exist in the Model_ResQuiz class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /prd/etopet/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('maker', '10')
#1 /prd/etopet/application/classes/model/lv1.php(142): Kohana_ORM->__set('maker', '10')
#2 /prd/etopet/application/classes/controller/in/resquiz.php(31): Model_Lv1->resquiz()
#3 [internal function]: Controller_In_Resquiz->action_index()
#4 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Resquiz))
#5 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /prd/etopet/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-29 17:22:44 --- ERROR: Kohana_Exception [ 0 ]: The maker property does not exist in the Model_ResQuiz class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2013-03-29 17:22:44 --- STRACE: Kohana_Exception [ 0 ]: The maker property does not exist in the Model_ResQuiz class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /prd/etopet/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('maker', '10')
#1 /prd/etopet/application/classes/model/lv1.php(142): Kohana_ORM->__set('maker', '10')
#2 /prd/etopet/application/classes/controller/in/resquiz.php(31): Model_Lv1->resquiz()
#3 [internal function]: Controller_In_Resquiz->action_index()
#4 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Resquiz))
#5 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /prd/etopet/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-29 17:23:06 --- ERROR: Kohana_Exception [ 0 ]: The maker property does not exist in the Model_ResQuiz class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2013-03-29 17:23:06 --- STRACE: Kohana_Exception [ 0 ]: The maker property does not exist in the Model_ResQuiz class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /prd/etopet/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('maker', '10')
#1 /prd/etopet/application/classes/model/lv1.php(142): Kohana_ORM->__set('maker', '10')
#2 /prd/etopet/application/classes/controller/in/resquiz.php(31): Model_Lv1->resquiz()
#3 [internal function]: Controller_In_Resquiz->action_index()
#4 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Resquiz))
#5 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /prd/etopet/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-29 17:24:28 --- ERROR: Kohana_Exception [ 0 ]: The maker property does not exist in the Model_ResQuiz class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2013-03-29 17:24:28 --- STRACE: Kohana_Exception [ 0 ]: The maker property does not exist in the Model_ResQuiz class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /prd/etopet/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('maker', '10')
#1 /prd/etopet/application/classes/model/lv1.php(142): Kohana_ORM->__set('maker', '10')
#2 /prd/etopet/application/classes/controller/in/resquiz.php(31): Model_Lv1->resquiz()
#3 [internal function]: Controller_In_Resquiz->action_index()
#4 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Resquiz))
#5 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /prd/etopet/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-29 17:24:35 --- ERROR: Kohana_Exception [ 0 ]: The maker property does not exist in the Model_ResQuiz class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2013-03-29 17:24:35 --- STRACE: Kohana_Exception [ 0 ]: The maker property does not exist in the Model_ResQuiz class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /prd/etopet/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('maker', '10')
#1 /prd/etopet/application/classes/model/lv1.php(142): Kohana_ORM->__set('maker', '10')
#2 /prd/etopet/application/classes/controller/in/resquiz.php(31): Model_Lv1->resquiz()
#3 [internal function]: Controller_In_Resquiz->action_index()
#4 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Resquiz))
#5 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /prd/etopet/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-29 17:24:47 --- ERROR: Kohana_Exception [ 0 ]: The maker property does not exist in the Model_ResQuiz class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2013-03-29 17:24:47 --- STRACE: Kohana_Exception [ 0 ]: The maker property does not exist in the Model_ResQuiz class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /prd/etopet/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('maker', '10')
#1 /prd/etopet/application/classes/model/lv1.php(142): Kohana_ORM->__set('maker', '10')
#2 /prd/etopet/application/classes/controller/in/resquiz.php(31): Model_Lv1->resquiz()
#3 [internal function]: Controller_In_Resquiz->action_index()
#4 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Resquiz))
#5 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /prd/etopet/index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-29 17:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 17:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 17:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 17:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 18:04:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 18:04:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 18:05:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_Lv1to3' not found ~ APPPATH/classes/controller/main.php [ 19 ]
2013-03-29 18:05:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_Lv1to3' not found ~ APPPATH/classes/controller/main.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-29 18:06:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/snake.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 18:06:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/snake.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 18:06:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/snake.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 18:06:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/snake.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 18:06:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 18:06:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 18:11:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 18:11:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 18:11:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 18:11:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 18:11:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/eat.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 18:11:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/eat.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 18:11:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 18:11:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 18:11:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 18:11:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 18:11:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 18:11:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 18:12:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 18:12:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 18:12:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 18:12:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 18:14:36 --- ERROR: Database_Exception [ 0 ]: ERROR:  null value in column "pv_u_id" violates not-null constraint
 [ INSERT INTO "usr" ("pet_id") VALUES ('8') ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
2013-03-29 18:14:36 --- STRACE: Database_Exception [ 0 ]: ERROR:  null value in column "pv_u_id" violates not-null constraint
 [ INSERT INTO "usr" ("pet_id") VALUES ('8') ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
--
#0 /prd/etopet/modules/database/classes/kohana/database/query.php(245): Kohana_Database_PostgreSQL->query(2, 'INSERT INTO "us...', false, Array)
#1 /prd/etopet/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 /prd/etopet/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /prd/etopet/application/classes/controller/in/usr.php(49): Kohana_ORM->save()
#4 /prd/etopet/application/classes/controller/in/usr.php(7): Controller_In_Usr->login()
#5 [internal function]: Controller_In_Usr->action_index()
#6 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Usr))
#7 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /prd/etopet/index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-29 18:16:35 --- ERROR: Database_Exception [ 0 ]: ERROR:  null value in column "pv_u_id" violates not-null constraint
 [ INSERT INTO "usr" ("pet_id") VALUES ('9') ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
2013-03-29 18:16:35 --- STRACE: Database_Exception [ 0 ]: ERROR:  null value in column "pv_u_id" violates not-null constraint
 [ INSERT INTO "usr" ("pet_id") VALUES ('9') ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
--
#0 /prd/etopet/modules/database/classes/kohana/database/query.php(245): Kohana_Database_PostgreSQL->query(2, 'INSERT INTO "us...', false, Array)
#1 /prd/etopet/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 /prd/etopet/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /prd/etopet/application/classes/controller/in/usr.php(49): Kohana_ORM->save()
#4 /prd/etopet/application/classes/controller/in/usr.php(7): Controller_In_Usr->login()
#5 [internal function]: Controller_In_Usr->action_index()
#6 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Usr))
#7 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /prd/etopet/index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-29 18:19:45 --- ERROR: Database_Exception [ 0 ]: ERROR:  null value in column "pv_u_id" violates not-null constraint
 [ INSERT INTO "usr" ("pet_id") VALUES ('10') ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
2013-03-29 18:19:45 --- STRACE: Database_Exception [ 0 ]: ERROR:  null value in column "pv_u_id" violates not-null constraint
 [ INSERT INTO "usr" ("pet_id") VALUES ('10') ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
--
#0 /prd/etopet/modules/database/classes/kohana/database/query.php(245): Kohana_Database_PostgreSQL->query(2, 'INSERT INTO "us...', false, Array)
#1 /prd/etopet/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 /prd/etopet/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /prd/etopet/application/classes/controller/in/usr.php(49): Kohana_ORM->save()
#4 /prd/etopet/application/classes/controller/in/usr.php(7): Controller_In_Usr->login()
#5 [internal function]: Controller_In_Usr->action_index()
#6 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Usr))
#7 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /prd/etopet/index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-29 18:22:08 --- ERROR: Database_Exception [ 0 ]: ERROR:  null value in column "pv_u_id" violates not-null constraint
 [ INSERT INTO "usr" ("pet_id") VALUES ('11') ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
2013-03-29 18:22:08 --- STRACE: Database_Exception [ 0 ]: ERROR:  null value in column "pv_u_id" violates not-null constraint
 [ INSERT INTO "usr" ("pet_id") VALUES ('11') ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
--
#0 /prd/etopet/modules/database/classes/kohana/database/query.php(245): Kohana_Database_PostgreSQL->query(2, 'INSERT INTO "us...', false, Array)
#1 /prd/etopet/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 /prd/etopet/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /prd/etopet/application/classes/controller/in/usr.php(49): Kohana_ORM->save()
#4 /prd/etopet/application/classes/controller/in/usr.php(7): Controller_In_Usr->login()
#5 [internal function]: Controller_In_Usr->action_index()
#6 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Usr))
#7 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /prd/etopet/index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-29 18:24:52 --- ERROR: Database_Exception [ 0 ]: ERROR:  null value in column "pv_u_id" violates not-null constraint
 [ INSERT INTO "usr" ("pet_id") VALUES ('12') ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
2013-03-29 18:24:52 --- STRACE: Database_Exception [ 0 ]: ERROR:  null value in column "pv_u_id" violates not-null constraint
 [ INSERT INTO "usr" ("pet_id") VALUES ('12') ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
--
#0 /prd/etopet/modules/database/classes/kohana/database/query.php(245): Kohana_Database_PostgreSQL->query(2, 'INSERT INTO "us...', false, Array)
#1 /prd/etopet/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 /prd/etopet/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /prd/etopet/application/classes/controller/in/usr.php(50): Kohana_ORM->save()
#4 /prd/etopet/application/classes/controller/in/usr.php(7): Controller_In_Usr->login()
#5 [internal function]: Controller_In_Usr->action_index()
#6 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Usr))
#7 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /prd/etopet/index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-29 18:26:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 18:26:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 18:26:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 18:26:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 18:32:00 --- ERROR: Database_Exception [ 0 ]: ERROR:  null value in column "pv_u_id" violates not-null constraint
 [ INSERT INTO "usr" ("pet_id") VALUES ('13') ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
2013-03-29 18:32:00 --- STRACE: Database_Exception [ 0 ]: ERROR:  null value in column "pv_u_id" violates not-null constraint
 [ INSERT INTO "usr" ("pet_id") VALUES ('13') ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
--
#0 /prd/etopet/modules/database/classes/kohana/database/query.php(245): Kohana_Database_PostgreSQL->query(2, 'INSERT INTO "us...', false, Array)
#1 /prd/etopet/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 /prd/etopet/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /prd/etopet/application/classes/controller/in/usr.php(50): Kohana_ORM->save()
#4 /prd/etopet/application/classes/controller/in/usr.php(7): Controller_In_Usr->login()
#5 [internal function]: Controller_In_Usr->action_index()
#6 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Usr))
#7 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /prd/etopet/index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-29 18:32:19 --- ERROR: Database_Exception [ 0 ]: ERROR:  null value in column "pv_u_id" violates not-null constraint
 [ INSERT INTO "usr" ("pet_id") VALUES ('14') ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
2013-03-29 18:32:19 --- STRACE: Database_Exception [ 0 ]: ERROR:  null value in column "pv_u_id" violates not-null constraint
 [ INSERT INTO "usr" ("pet_id") VALUES ('14') ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
--
#0 /prd/etopet/modules/database/classes/kohana/database/query.php(245): Kohana_Database_PostgreSQL->query(2, 'INSERT INTO "us...', false, Array)
#1 /prd/etopet/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 /prd/etopet/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /prd/etopet/application/classes/controller/in/usr.php(50): Kohana_ORM->save()
#4 /prd/etopet/application/classes/controller/in/usr.php(7): Controller_In_Usr->login()
#5 [internal function]: Controller_In_Usr->action_index()
#6 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Usr))
#7 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /prd/etopet/index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-29 18:33:24 --- ERROR: Database_Exception [ 0 ]: ERROR:  duplicate key value violates unique constraint "usr_pkey"
 [ INSERT INTO "usr" ("pv_u_id", "pet_id", "name", "img", "date") VALUES ('88', '15', 'komi_s', 'https://users.komahana.info/public/img/profile/phbydtijafhoea5mx50f.jpg', '20130329') ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
2013-03-29 18:33:24 --- STRACE: Database_Exception [ 0 ]: ERROR:  duplicate key value violates unique constraint "usr_pkey"
 [ INSERT INTO "usr" ("pv_u_id", "pet_id", "name", "img", "date") VALUES ('88', '15', 'komi_s', 'https://users.komahana.info/public/img/profile/phbydtijafhoea5mx50f.jpg', '20130329') ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
--
#0 /prd/etopet/modules/database/classes/kohana/database/query.php(245): Kohana_Database_PostgreSQL->query(2, 'INSERT INTO "us...', false, Array)
#1 /prd/etopet/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 /prd/etopet/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /prd/etopet/application/classes/controller/in/usr.php(50): Kohana_ORM->save()
#4 /prd/etopet/application/classes/controller/in/usr.php(7): Controller_In_Usr->login()
#5 [internal function]: Controller_In_Usr->action_index()
#6 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Usr))
#7 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /prd/etopet/index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-29 18:38:48 --- ERROR: Database_Exception [ 0 ]: ERROR:  invalid input syntax for integer: "komi_s"
LINE 1: ...ECT "usr".* FROM "usr" AS "usr" WHERE "pv_u_id" = 'komi_s' L...
                                                             ^
 [ SELECT "usr".* FROM "usr" AS "usr" WHERE "pv_u_id" = 'komi_s' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
2013-03-29 18:38:48 --- STRACE: Database_Exception [ 0 ]: ERROR:  invalid input syntax for integer: "komi_s"
LINE 1: ...ECT "usr".* FROM "usr" AS "usr" WHERE "pv_u_id" = 'komi_s' L...
                                                             ^
 [ SELECT "usr".* FROM "usr" AS "usr" WHERE "pv_u_id" = 'komi_s' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
--
#0 /prd/etopet/modules/database/classes/kohana/database/query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "usr".* ...', false, Array)
#1 /prd/etopet/modules/orm/classes/kohana/orm.php(972): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 /prd/etopet/modules/orm/classes/kohana/orm.php(898): Kohana_ORM->_load_result(false)
#3 /prd/etopet/application/classes/controller/in/usr.php(22): Kohana_ORM->find()
#4 /prd/etopet/application/classes/controller/in/usr.php(7): Controller_In_Usr->login()
#5 [internal function]: Controller_In_Usr->action_index()
#6 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Usr))
#7 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /prd/etopet/index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-29 18:40:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 18:40:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 18:40:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 18:40:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 18:49:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 18:49:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 19:05:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 19:05:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 19:05:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 19:05:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 19:05:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 19:05:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 19:06:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 19:06:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 19:06:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 19:06:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 19:06:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 19:06:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 19:07:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 19:07:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 19:07:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 19:07:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 19:07:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 19:07:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 20:40:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: raw_data ~ APPPATH/classes/model/lv1.php [ 111 ]
2013-03-29 20:40:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: raw_data ~ APPPATH/classes/model/lv1.php [ 111 ]
--
#0 /prd/etopet/application/classes/model/lv1.php(111): Kohana_Core::error_handler(8, 'Undefined varia...', '/prd/etopet/app...', 111, Array)
#1 /prd/etopet/application/classes/controller/in/resquiz.php(31): Model_Lv1->resquiz()
#2 [internal function]: Controller_In_Resquiz->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Resquiz))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-29 20:44:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: raw_data ~ APPPATH/classes/model/lv1.php [ 111 ]
2013-03-29 20:44:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: raw_data ~ APPPATH/classes/model/lv1.php [ 111 ]
--
#0 /prd/etopet/application/classes/model/lv1.php(111): Kohana_Core::error_handler(8, 'Undefined varia...', '/prd/etopet/app...', 111, Array)
#1 /prd/etopet/application/classes/controller/in/resquiz.php(31): Model_Lv1->resquiz()
#2 [internal function]: Controller_In_Resquiz->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Resquiz))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-29 20:44:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: raw_data ~ APPPATH/classes/model/lv1.php [ 111 ]
2013-03-29 20:44:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: raw_data ~ APPPATH/classes/model/lv1.php [ 111 ]
--
#0 /prd/etopet/application/classes/model/lv1.php(111): Kohana_Core::error_handler(8, 'Undefined varia...', '/prd/etopet/app...', 111, Array)
#1 /prd/etopet/application/classes/controller/in/resquiz.php(31): Model_Lv1->resquiz()
#2 [internal function]: Controller_In_Resquiz->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Resquiz))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-29 20:45:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: raw_data ~ APPPATH/classes/model/lv1.php [ 111 ]
2013-03-29 20:45:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: raw_data ~ APPPATH/classes/model/lv1.php [ 111 ]
--
#0 /prd/etopet/application/classes/model/lv1.php(111): Kohana_Core::error_handler(8, 'Undefined varia...', '/prd/etopet/app...', 111, Array)
#1 /prd/etopet/application/classes/controller/in/resquiz.php(31): Model_Lv1->resquiz()
#2 [internal function]: Controller_In_Resquiz->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Resquiz))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-29 20:45:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: raw_data ~ APPPATH/classes/model/lv1.php [ 111 ]
2013-03-29 20:45:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: raw_data ~ APPPATH/classes/model/lv1.php [ 111 ]
--
#0 /prd/etopet/application/classes/model/lv1.php(111): Kohana_Core::error_handler(8, 'Undefined varia...', '/prd/etopet/app...', 111, Array)
#1 /prd/etopet/application/classes/controller/in/resquiz.php(31): Model_Lv1->resquiz()
#2 [internal function]: Controller_In_Resquiz->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Resquiz))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-29 20:46:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: raw_data ~ APPPATH/classes/model/lv1.php [ 111 ]
2013-03-29 20:46:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: raw_data ~ APPPATH/classes/model/lv1.php [ 111 ]
--
#0 /prd/etopet/application/classes/model/lv1.php(111): Kohana_Core::error_handler(8, 'Undefined varia...', '/prd/etopet/app...', 111, Array)
#1 /prd/etopet/application/classes/controller/in/resquiz.php(31): Model_Lv1->resquiz()
#2 [internal function]: Controller_In_Resquiz->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Resquiz))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-29 20:48:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: raw_data ~ APPPATH/classes/model/lv1.php [ 111 ]
2013-03-29 20:48:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: raw_data ~ APPPATH/classes/model/lv1.php [ 111 ]
--
#0 /prd/etopet/application/classes/model/lv1.php(111): Kohana_Core::error_handler(8, 'Undefined varia...', '/prd/etopet/app...', 111, Array)
#1 /prd/etopet/application/classes/controller/in/resquiz.php(31): Model_Lv1->resquiz()
#2 [internal function]: Controller_In_Resquiz->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Resquiz))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-29 20:48:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 20:48:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 21:02:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 21:02:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/level/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 21:06:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/snake.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 21:06:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/snake.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 21:06:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/snake.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 21:06:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/snake.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-29 21:06:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-29 21:06:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}