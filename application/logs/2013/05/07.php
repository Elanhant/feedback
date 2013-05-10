<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-07 08:11:49 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\test2.ru\www\system\classes\Kohana\Cookie.php:67
2013-05-07 08:11:49 --- DEBUG: #0 Z:\home\test2.ru\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('__utma', NULL)
#1 Z:\home\test2.ru\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('__utma')
#2 Z:\home\test2.ru\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\test2.ru\www\system\classes\Kohana\Cookie.php:67
2013-05-07 10:33:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\warning.php [ 18 ] in :
2013-05-07 10:33:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 10:35:27 --- CRITICAL: ErrorException [ 1 ]: Access to undeclared static property: Request::$request ~ APPPATH\classes\Controller\warning.php [ 18 ] in :
2013-05-07 10:35:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 10:37:20 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\warning.php [ 18 ] in :
2013-05-07 10:37:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 10:37:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\warning.php [ 18 ] in :
2013-05-07 10:37:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 10:38:05 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\classes\Controller\warning.php [ 18 ] in :
2013-05-07 10:38:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 10:38:09 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\warning.php [ 18 ] in :
2013-05-07 10:38:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 10:39:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\warning.php [ 18 ] in :
2013-05-07 10:39:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 10:39:42 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\warning.php [ 18 ] in :
2013-05-07 10:39:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 10:54:33 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\warning.php [ 18 ] in :
2013-05-07 10:54:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 10:57:50 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\warning.php [ 18 ] in :
2013-05-07 10:57:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 11:00:41 --- CRITICAL: Kohana_Exception [ 0 ]: The get_prof property does not exist in the Model_Professor class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\test2.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-07 11:00:41 --- DEBUG: #0 Z:\home\test2.ru\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('get_prof')
#1 Z:\home\test2.ru\www\application\classes\Controller\choice.php(10): Kohana_ORM->__get('get_prof')
#2 Z:\home\test2.ru\www\system\classes\Kohana\Controller.php(84): Controller_Choice->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test2.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Choice))
#5 Z:\home\test2.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test2.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test2.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\test2.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-07 11:02:49 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Professor as array ~ APPPATH\classes\Model\professor.php [ 16 ] in :
2013-05-07 11:02:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 11:09:42 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_professors' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-05-07 11:09:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 11:13:09 --- CRITICAL: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ APPPATH\classes\Model\professor.php [ 11 ] in :
2013-05-07 11:13:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 11:17:41 --- CRITICAL: ErrorException [ 8 ]: Undefined index: lec ~ APPPATH\views\choice.php [ 6 ] in Z:\home\test2.ru\www\application\views\choice.php:6
2013-05-07 11:17:41 --- DEBUG: #0 Z:\home\test2.ru\www\application\views\choice.php(6): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test2.r...', 6, Array)
#1 Z:\home\test2.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test2.r...')
#2 Z:\home\test2.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test2.r...', Array)
#3 Z:\home\test2.ru\www\application\classes\Controller\choice.php(11): Kohana_View->render()
#4 Z:\home\test2.ru\www\system\classes\Kohana\Controller.php(84): Controller_Choice->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test2.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Choice))
#7 Z:\home\test2.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test2.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test2.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test2.ru\www\application\views\choice.php:6
2013-05-07 11:17:50 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Professor as array ~ APPPATH\classes\Model\professor.php [ 15 ] in :
2013-05-07 11:17:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 11:41:23 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in :
2013-05-07 11:41:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'Z:\home\test2.r...', 33, Array)
#1 Z:\home\test2.ru\www\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #71, 'lec')
#2 Z:\home\test2.ru\www\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('lec')
#3 Z:\home\test2.ru\www\application\views\choice.php(6): Kohana_Database_Result->offsetGet('lec')
#4 Z:\home\test2.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test2.r...')
#5 Z:\home\test2.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test2.r...', Array)
#6 Z:\home\test2.ru\www\application\classes\Controller\choice.php(16): Kohana_View->render()
#7 Z:\home\test2.ru\www\system\classes\Kohana\Controller.php(84): Controller_Choice->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test2.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Choice))
#10 Z:\home\test2.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test2.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test2.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in :
2013-05-07 11:42:25 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in :
2013-05-07 11:42:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'Z:\home\test2.r...', 33, Array)
#1 Z:\home\test2.ru\www\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #71, 'lec')
#2 Z:\home\test2.ru\www\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('lec')
#3 Z:\home\test2.ru\www\application\views\choice.php(6): Kohana_Database_Result->offsetGet('lec')
#4 Z:\home\test2.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test2.r...')
#5 Z:\home\test2.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test2.r...', Array)
#6 Z:\home\test2.ru\www\application\classes\Controller\choice.php(16): Kohana_View->render()
#7 Z:\home\test2.ru\www\system\classes\Kohana\Controller.php(84): Controller_Choice->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test2.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Choice))
#10 Z:\home\test2.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test2.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test2.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in :
2013-05-07 11:42:56 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in :
2013-05-07 11:42:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'Z:\home\test2.r...', 33, Array)
#1 Z:\home\test2.ru\www\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #71, 'lec')
#2 Z:\home\test2.ru\www\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('lec')
#3 Z:\home\test2.ru\www\application\views\choice.php(6): Kohana_Database_Result->offsetGet('lec')
#4 Z:\home\test2.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test2.r...')
#5 Z:\home\test2.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test2.r...', Array)
#6 Z:\home\test2.ru\www\application\classes\Controller\choice.php(16): Kohana_View->render()
#7 Z:\home\test2.ru\www\system\classes\Kohana\Controller.php(84): Controller_Choice->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test2.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Choice))
#10 Z:\home\test2.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test2.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test2.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in :
2013-05-07 11:42:58 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in :
2013-05-07 11:42:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'Z:\home\test2.r...', 33, Array)
#1 Z:\home\test2.ru\www\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #71, 'lec')
#2 Z:\home\test2.ru\www\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('lec')
#3 Z:\home\test2.ru\www\application\views\choice.php(6): Kohana_Database_Result->offsetGet('lec')
#4 Z:\home\test2.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test2.r...')
#5 Z:\home\test2.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test2.r...', Array)
#6 Z:\home\test2.ru\www\application\classes\Controller\choice.php(16): Kohana_View->render()
#7 Z:\home\test2.ru\www\system\classes\Kohana\Controller.php(84): Controller_Choice->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test2.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Choice))
#10 Z:\home\test2.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test2.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test2.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in :
2013-05-07 11:46:07 --- CRITICAL: ErrorException [ 8 ]: Undefined index: lec ~ APPPATH\views\choice.php [ 6 ] in Z:\home\test2.ru\www\application\views\choice.php:6
2013-05-07 11:46:07 --- DEBUG: #0 Z:\home\test2.ru\www\application\views\choice.php(6): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test2.r...', 6, Array)
#1 Z:\home\test2.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test2.r...')
#2 Z:\home\test2.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test2.r...', Array)
#3 Z:\home\test2.ru\www\application\classes\Controller\choice.php(16): Kohana_View->render()
#4 Z:\home\test2.ru\www\system\classes\Kohana\Controller.php(84): Controller_Choice->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test2.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Choice))
#7 Z:\home\test2.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test2.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test2.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test2.ru\www\application\views\choice.php:6
2013-05-07 11:49:07 --- CRITICAL: View_Exception [ 0 ]: The requested view choice.php could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test2.ru\www\system\classes\Kohana\View.php:137
2013-05-07 11:49:07 --- DEBUG: #0 Z:\home\test2.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('choice.php')
#1 Z:\home\test2.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('choice.php', NULL)
#2 Z:\home\test2.ru\www\application\classes\Controller\choice.php(9): Kohana_View::factory('choice.php')
#3 Z:\home\test2.ru\www\system\classes\Kohana\Controller.php(84): Controller_Choice->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test2.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Choice))
#6 Z:\home\test2.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test2.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test2.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test2.ru\www\system\classes\Kohana\View.php:137
2013-05-07 12:04:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 3 ] in Z:\home\test2.ru\www\application\views\template.php:3
2013-05-07 12:04:46 --- DEBUG: #0 Z:\home\test2.ru\www\application\views\template.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test2.r...', 3, Array)
#1 Z:\home\test2.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test2.r...')
#2 Z:\home\test2.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test2.r...', Array)
#3 Z:\home\test2.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\test2.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test2.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Choice))
#7 Z:\home\test2.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test2.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test2.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test2.ru\www\application\views\template.php:3
2013-05-07 23:16:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 3 ] in Z:\home\test2.ru\www\application\views\template.php:3
2013-05-07 23:16:24 --- DEBUG: #0 Z:\home\test2.ru\www\application\views\template.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test2.r...', 3, Array)
#1 Z:\home\test2.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\test2.r...')
#2 Z:\home\test2.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test2.r...', Array)
#3 Z:\home\test2.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\test2.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test2.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Testtest))
#7 Z:\home\test2.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test2.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test2.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test2.ru\www\application\views\template.php:3
2013-05-07 23:34:32 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Professor as array ~ APPPATH\classes\Model\professor.php [ 21 ] in :
2013-05-07 23:34:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 23:49:52 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function get_question() ~ APPPATH\classes\Controller\testtest.php [ 75 ] in :
2013-05-07 23:49:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 23:50:05 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'number' in 'where clause' [ SELECT * FROM `answers1` WHERE `number` = 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test2.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-07 23:50:05 --- DEBUG: #0 Z:\home\test2.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 Z:\home\test2.ru\www\application\classes\Controller\testtest.php(32): Kohana_Database_Query->execute()
#2 Z:\home\test2.ru\www\application\classes\Controller\testtest.php(75): Controller_Testtest->get_question(1)
#3 Z:\home\test2.ru\www\application\classes\Controller\testtest.php(12): Controller_Testtest->get_questions(8)
#4 Z:\home\test2.ru\www\system\classes\Kohana\Controller.php(84): Controller_Testtest->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test2.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Testtest))
#7 Z:\home\test2.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test2.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test2.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test2.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-07 23:50:23 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function radio_vopros() ~ APPPATH\views\opros.php [ 42 ] in :
2013-05-07 23:50:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :