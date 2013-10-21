<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-09-13 20:00:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-09-13 20:00:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-13 23:55:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL en/testgame/touch was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-09-13 23:55:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL en/testgame/touch was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /prd/etopet/index.php(109): Kohana_Request->execute()
#3 {main}