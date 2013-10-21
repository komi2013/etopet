<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-04-08 03:41:49 --- ERROR: ErrorException [ 2048 ]: Non-static method Kohana_Log::add() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/in/score.php [ 7 ]
2013-04-08 03:41:49 --- STRACE: ErrorException [ 2048 ]: Non-static method Kohana_Log::add() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/in/score.php [ 7 ]
--
#0 /prd/etopet/application/classes/controller/in/score.php(7): Kohana_Core::error_handler(2048, 'Non-static meth...', '/prd/etopet/app...', 7, Array)
#1 [internal function]: Controller_In_Score->action_index()
#2 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Score))
#3 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /prd/etopet/index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-08 03:42:40 --- NOTICE: My Logged Message Here
2013-04-08 03:43:45 --- NOTICE: 122.212.156.194
2013-04-08 03:53:00 --- NOTICE: 133.242.146.131
2013-04-08 04:06:33 --- NOTICE: 133.242.146.131
2013-04-08 04:23:12 --- NOTICE: 133.242.146.131
2013-04-08 04:26:01 --- NOTICE: 133.242.146.131
2013-04-08 04:30:28 --- NOTICE: 133.242.146.131
2013-04-08 04:41:37 --- NOTICE: 133.242.146.131
2013-04-08 04:41:42 --- NOTICE: 133.242.146.131
2013-04-08 04:42:35 --- NOTICE: 133.242.146.131
2013-04-08 04:42:37 --- NOTICE: 133.242.146.131
2013-04-08 04:42:54 --- NOTICE: 133.242.146.131
2013-04-08 04:43:21 --- NOTICE: 133.242.146.131
2013-04-08 04:45:04 --- NOTICE: 133.242.146.131
2013-04-08 04:54:32 --- NOTICE: 133.242.146.131
2013-04-08 04:54:42 --- NOTICE: 133.242.146.131
2013-04-08 04:58:09 --- NOTICE: 133.242.146.131
2013-04-08 18:00:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/game/stg2/chara1.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-08 18:00:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/game/stg2/chara1.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}