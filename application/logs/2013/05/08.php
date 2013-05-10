<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-08 00:25:14 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\opros.php [ 43 ] in :
2013-05-08 00:25:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-08 00:25:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\opros.php [ 43 ] in :
2013-05-08 00:25:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-08 00:29:00 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function radio_vopros() ~ APPPATH\views\opros.php [ 45 ] in :
2013-05-08 00:29:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-08 12:59:15 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\opros.php [ 43 ] in :
2013-05-08 12:59:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-08 13:32:03 --- CRITICAL: ErrorException [ 8 ]: Undefined index: code ~ APPPATH\classes\Controller\opros.php [ 21 ] in Z:\home\test2.ru\www\application\classes\Controller\opros.php:21
2013-05-08 13:32:03 --- DEBUG: #0 Z:\home\test2.ru\www\application\classes\Controller\opros.php(21): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test2.r...', 21, Array)
#1 Z:\home\test2.ru\www\system\classes\Kohana\Controller.php(84): Controller_Opros->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test2.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Opros))
#4 Z:\home\test2.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test2.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test2.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test2.ru\www\application\classes\Controller\opros.php:21
2013-05-08 13:32:43 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be an array, string given, called in Z:\home\test2.ru\www\application\classes\Controller\opros.php on line 40 and defined ~ MODPATH\database\classes\Kohana\Database\Query\Builder\Insert.php [ 80 ] in Z:\home\test2.ru\www\modules\database\classes\Kohana\Database\Query\Builder\Insert.php:80
2013-05-08 13:32:43 --- DEBUG: #0 Z:\home\test2.ru\www\modules\database\classes\Kohana\Database\Query\Builder\Insert.php(80): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\home\test2.r...', 80, Array)
#1 Z:\home\test2.ru\www\application\classes\Controller\opros.php(40): Kohana_Database_Query_Builder_Insert->values('1', '1', '4', '1')
#2 Z:\home\test2.ru\www\system\classes\Kohana\Controller.php(84): Controller_Opros->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test2.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Opros))
#5 Z:\home\test2.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test2.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test2.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\test2.ru\www\modules\database\classes\Kohana\Database\Query\Builder\Insert.php:80
2013-05-08 14:15:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\Controller\opros.php [ 146 ] in :
2013-05-08 14:15:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-08 14:15:35 --- CRITICAL: Kohana_Exception [ 0 ]: The st_num_quest property does not exist in the Model_Comment class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in Z:\home\test2.ru\www\modules\orm\classes\Kohana\ORM.php:699
2013-05-08 14:15:35 --- DEBUG: #0 Z:\home\test2.ru\www\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('st_num_quest', '1')
#1 Z:\home\test2.ru\www\application\classes\Controller\opros.php(147): Kohana_ORM->__set('st_num_quest', '1')
#2 Z:\home\test2.ru\www\application\classes\Controller\opros.php(39): Controller_Opros->add_statistic('1', '1', '4', '1')
#3 Z:\home\test2.ru\www\system\classes\Kohana\Controller.php(84): Controller_Opros->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test2.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Opros))
#6 Z:\home\test2.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test2.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test2.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test2.ru\www\modules\orm\classes\Kohana\ORM.php:699