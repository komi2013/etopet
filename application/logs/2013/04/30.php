<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-04-30 00:17:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-30 00:17:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-30 12:54:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-04-30 12:54:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /prd/etopet/index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-30 20:09:38 --- ERROR: Database_Exception [ 0 ]: ERROR:  null value in column "name" violates not-null constraint
 [ UPDATE "status" SET "food" = 6, "name" = NULL WHERE "pet_id" = '7' ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
2013-04-30 20:09:38 --- STRACE: Database_Exception [ 0 ]: ERROR:  null value in column "name" violates not-null constraint
 [ UPDATE "status" SET "food" = 6, "name" = NULL WHERE "pet_id" = '7' ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
--
#0 /prd/etopet/modules/database/classes/kohana/database/query.php(245): Kohana_Database_PostgreSQL->query(3, 'UPDATE "status"...', false, Array)
#1 /prd/etopet/modules/orm/classes/kohana/orm.php(1287): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 /prd/etopet/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->update(NULL)
#3 /prd/etopet/application/classes/model/stg1.php(112): Kohana_ORM->save()
#4 /prd/etopet/application/classes/controller/in/resquiz.php(31): Model_Stg1->resquiz()
#5 [internal function]: Controller_In_Resquiz->action_index()
#6 /prd/etopet/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_In_Resquiz))
#7 /prd/etopet/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /prd/etopet/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /prd/etopet/index.php(109): Kohana_Request->execute()
#10 {main}