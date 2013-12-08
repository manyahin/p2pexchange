<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-05 11:17:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: methods ~ APPPATH/classes/Controller/Request.php [ 72 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Request.php:72
2013-12-05 11:17:42 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Request.php(72): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Manyahin...', 72, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Request->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Request.php:72
2013-12-05 11:19:12 --- EMERGENCY: Exception [ 0 ]: You need select method of transfer money ~ APPPATH/classes/Controller/Request.php [ 74 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php:84
2013-12-05 11:19:12 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Request->action_create()
#1 [internal function]: Kohana_Controller->execute()
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#6 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php:84
2013-12-05 11:19:33 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_ORM_Validation_Exception::__construct() must be an instance of Validation, none given, called in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Request.php on line 74 and defined ~ MODPATH/orm/classes/Kohana/ORM/Validation/Exception.php [ 34 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM/Validation/Exception.php:34
2013-12-05 11:19:33 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM/Validation/Exception.php(34): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Users/Manyahin...', 34, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Request.php(74): Kohana_ORM_Validation_Exception->__construct('You need select...')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Request->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM/Validation/Exception.php:34
2013-12-05 11:24:53 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_ORM_Validation_Exception::__construct() must be an instance of Validation, none given, called in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Request.php on line 73 and defined ~ MODPATH/orm/classes/Kohana/ORM/Validation/Exception.php [ 34 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM/Validation/Exception.php:34
2013-12-05 11:24:53 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM/Validation/Exception.php(34): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Users/Manyahin...', 34, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Request.php(73): Kohana_ORM_Validation_Exception->__construct('You need select...')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Request->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM/Validation/Exception.php:34
2013-12-05 11:40:52 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, object given ~ APPPATH/classes/Model/request.php [ 57 ] in file:line
2013-12-05 11:40:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/Users/Manyahin...', 57, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Model/request.php(57): in_array('18', Object(Database_MySQL_Result))
#2 [internal function]: Model_Request->have_methods('18')
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1273): Kohana_Validation->check()
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Request.php(83): Kohana_ORM->save()
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Request->action_create()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#11 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#14 {main} in file:line
2013-12-05 12:00:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: cash_currencies ~ APPPATH/classes/Model/request.php [ 59 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Model/request.php:59
2013-12-05 12:00:38 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Model/request.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 59, Array)
#1 [internal function]: Model_Request->have_methods('18')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1273): Kohana_Validation->check()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Request.php(83): Kohana_ORM->save()
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Request->action_create()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#10 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Model/request.php:59
2013-12-05 12:00:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: cash_currencies ~ APPPATH/classes/Model/request.php [ 58 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Model/request.php:58
2013-12-05 12:00:53 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Model/request.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 58, Array)
#1 [internal function]: Model_Request->have_methods('18')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1273): Kohana_Validation->check()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Request.php(83): Kohana_ORM->save()
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Request->action_create()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#10 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Model/request.php:58
2013-12-05 12:01:02 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, object given ~ APPPATH/classes/Model/request.php [ 58 ] in file:line
2013-12-05 12:01:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/Users/Manyahin...', 58, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Model/request.php(58): in_array('18', Object(Database_MySQL_Result))
#2 [internal function]: Model_Request->have_methods('18')
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1273): Kohana_Validation->check()
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Request.php(83): Kohana_ORM->save()
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Request->action_create()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#11 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#14 {main} in file:line
2013-12-05 12:01:13 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function as_array() ~ APPPATH/classes/Model/request.php [ 56 ] in file:line
2013-12-05 12:01:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-05 15:39:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/config/p2p.php [ 5 ] in file:line
2013-12-05 15:39:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-05 15:40:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Config::$title ~ APPPATH/classes/Controller/Site.php [ 13 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Site.php:13
2013-12-05 15:40:34 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Site.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Manyahin...', 13, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(69): Controller_Site->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Site.php:13
2013-12-05 16:23:12 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php:137
2013-12-05 16:23:12 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php:137
2013-12-05 16:25:25 --- EMERGENCY: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH/classes/Controller/Welcome.php [ 8 ] in file:line
2013-12-05 16:25:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-05 16:27:14 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php:137
2013-12-05 16:27:14 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php:137
2013-12-05 16:29:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: language ~ APPPATH/views/template.php [ 8 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php:8
2013-12-05 16:29:51 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 8, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php:8
2013-12-05 16:35:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/Request/create.php [ 3 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/Request/create.php:3
2013-12-05 16:35:02 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/Request/create.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 3, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php(48): Kohana_View->__toString()
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#11 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/Request/create.php:3
2013-12-05 17:11:52 --- EMERGENCY: View_Exception [ 0 ]: The requested view request/list could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php:137
2013-12-05 17:11:52 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('request/list')
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('request/list', NULL)
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Bid.php(10): Kohana_View::factory('request/list')
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Bid->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Bid))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php:137
2013-12-05 17:23:04 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH/views/template.php [ 7 ] in file:line
2013-12-05 17:23:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-05 17:23:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH/views/template.php [ 7 ] in file:line
2013-12-05 17:23:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-05 17:24:32 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH/views/template.php [ 7 ] in file:line
2013-12-05 17:24:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-05 17:24:58 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH/views/template.php [ 8 ] in file:line
2013-12-05 17:24:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-05 17:25:36 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH/views/template.php [ 8 ] in file:line
2013-12-05 17:25:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-05 17:26:03 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH/views/template.php [ 8 ] in file:line
2013-12-05 17:26:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-05 17:26:29 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH/views/template.php [ 8 ] in file:line
2013-12-05 17:26:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-05 17:27:30 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH/views/template.php [ 9 ] in file:line
2013-12-05 17:27:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-05 17:27:37 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH/views/template.php [ 8 ] in file:line
2013-12-05 17:27:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-05 17:28:13 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH/views/template.php [ 7 ] in file:line
2013-12-05 17:28:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-05 17:31:39 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH/views/template.php [ 9 ] in file:line
2013-12-05 17:31:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-05 17:32:16 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH/views/template.php [ 9 ] in file:line
2013-12-05 17:32:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-05 17:32:55 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH/views/template.php [ 9 ] in file:line
2013-12-05 17:32:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-05 17:36:51 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Config_Group::render() ~ SYSPATH/classes/Kohana/Controller/Template.php [ 44 ] in file:line
2013-12-05 17:36:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-05 17:59:38 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$messages ~ APPPATH/classes/Controller/Site.php [ 11 ] in file:line
2013-12-05 17:59:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-05 18:06:11 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '6' (T_LNUMBER), expecting ',' or ';' ~ APPPATH/views/template.php [ 50 ] in file:line
2013-12-05 18:06:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-05 18:14:18 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$message ~ APPPATH/classes/Controller/Site.php [ 11 ] in file:line
2013-12-05 18:14:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line