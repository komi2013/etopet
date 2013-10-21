<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-04-19 07:49:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL en/in/game/get was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-04-19 07:49:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL en/in/game/get was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /prd/etopet/index.php(109): Kohana_Request->execute()
#3 {main}
2013-04-19 07:50:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL en/in/game/get was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-04-19 07:50:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL en/in/game/get was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /prd/etopet/index.php(109): Kohana_Request->execute()
#3 {main}
2013-04-19 08:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL en/in/game/getscore was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-04-19 08:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL en/in/game/getscore was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /prd/etopet/index.php(109): Kohana_Request->execute()
#3 {main}
2013-04-19 08:00:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL en/in/game/getscore was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-04-19 08:00:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL en/in/game/getscore was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /prd/etopet/index.php(109): Kohana_Request->execute()
#3 {main}
2013-04-19 08:01:42 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_In_Game::$session ~ APPPATH/classes/controller/in/game.php [ 13 ]
2013-04-19 08:01:42 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_In_Game::$session ~ APPPATH/classes/controller/in/game.php [ 13 ]
--
#0 /prd/etopet/application/classes/controller/in/game.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', '/prd/etopet/app...', 13, Array)
#1 /prd/etopet/application/classes/controller/in/game.php(7): Controller_In_Game->getscore()
#2 [internal function]: Controller_In_Game->action_index()
#3 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Game))
#4 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /prd/etopet/index.php(109): Kohana_Request->execute()
#7 {main}