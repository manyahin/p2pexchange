<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-09 11:37:13 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/user/info.php [ 12 ] in file:line
2013-12-09 11:37:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-09 11:39:22 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/user/info.php [ 20 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/user/info.php:20
2013-12-09 11:39:22 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/user/info.php(20): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/Manyahin...', 20, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php(48): Kohana_View->__toString()
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/user/info.php:20
2013-12-09 11:50:39 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH/classes/Controller/User.php [ 80 ] in file:line
2013-12-09 11:50:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-09 11:58:52 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ MODPATH/orm/classes/Model/Auth/User.php [ 167 ] in file:line
2013-12-09 11:58:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-09 11:58:59 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ MODPATH/orm/classes/Model/Auth/User.php [ 167 ] in file:line
2013-12-09 11:58:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-09 11:59:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ MODPATH/orm/classes/Model/Auth/User.php [ 167 ] in file:line
2013-12-09 11:59:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-09 12:01:16 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ MODPATH/orm/classes/Model/Auth/User.php [ 167 ] in file:line
2013-12-09 12:01:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-09 14:39:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/User.php [ 58 ] in file:line
2013-12-09 14:39:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-09 14:40:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/User.php [ 58 ] in file:line
2013-12-09 14:40:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-09 14:40:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1540 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:1540
2013-12-09 14:40:23 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Manyahin...', 1540, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1468): Kohana_ORM->count_relations('roles', 2)
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Site.php(16): Kohana_ORM->has('roles', 2)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(69): Controller_Site->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:1540
2013-12-09 14:40:45 --- EMERGENCY: Kohana_Exception [ 0 ]: The bids property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:603
2013-12-09 14:40:45 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('bids')
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php(55): Kohana_ORM->__get('bids')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_User->action_info()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:603
2013-12-09 14:40:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1540 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:1540
2013-12-09 14:40:49 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Manyahin...', 1540, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1468): Kohana_ORM->count_relations('roles', 2)
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Site.php(16): Kohana_ORM->has('roles', 2)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(69): Controller_Site->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:1540
2013-12-09 14:42:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1540 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:1540
2013-12-09 14:42:03 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Manyahin...', 1540, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1468): Kohana_ORM->count_relations('roles', 2)
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Site.php(16): Kohana_ORM->has('roles', 2)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(69): Controller_Site->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:1540
2013-12-09 14:43:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1540 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:1540
2013-12-09 14:43:35 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Manyahin...', 1540, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1468): Kohana_ORM->count_relations('roles', 2)
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Site.php(16): Kohana_ORM->has('roles', 2)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(69): Controller_Site->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:1540
2013-12-09 14:43:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1540 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:1540
2013-12-09 14:43:36 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Manyahin...', 1540, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1468): Kohana_ORM->count_relations('roles', 2)
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Site.php(16): Kohana_ORM->has('roles', 2)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(69): Controller_Site->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:1540
2013-12-09 14:43:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1540 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:1540
2013-12-09 14:43:38 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Manyahin...', 1540, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1468): Kohana_ORM->count_relations('roles', 2)
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Site.php(16): Kohana_ORM->has('roles', 2)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(69): Controller_Site->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:1540
2013-12-09 14:43:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1540 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:1540
2013-12-09 14:43:41 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Manyahin...', 1540, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1468): Kohana_ORM->count_relations('roles', 2)
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Site.php(16): Kohana_ORM->has('roles', 2)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(69): Controller_Site->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:1540
2013-12-09 14:43:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1540 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:1540
2013-12-09 14:43:45 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Manyahin...', 1540, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1468): Kohana_ORM->count_relations('roles', 2)
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Site.php(16): Kohana_ORM->has('roles', 2)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(69): Controller_Site->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:1540
2013-12-09 14:43:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1540 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:1540
2013-12-09 14:43:47 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Manyahin...', 1540, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1468): Kohana_ORM->count_relations('roles', 2)
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Site.php(16): Kohana_ORM->has('roles', 2)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(69): Controller_Site->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:1540
2013-12-09 14:44:06 --- EMERGENCY: Kohana_Exception [ 0 ]: The bids property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:603
2013-12-09 14:44:06 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('bids')
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php(55): Kohana_ORM->__get('bids')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_User->action_info()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:603
2013-12-09 14:57:11 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, string given ~ APPPATH/classes/Controller/User.php [ 70 ] in file:line
2013-12-09 14:57:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/Users/Manyahin...', 70, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php(70): in_array(Array, '4')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_User->action_info()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-12-09 15:07:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH/classes/Controller/User.php [ 140 ] in file:line
2013-12-09 15:07:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-09 15:10:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'elseif' (T_ELSEIF) ~ APPPATH/views/user/bids.php [ 16 ] in file:line
2013-12-09 15:10:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-09 15:10:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: merged_bids ~ APPPATH/views/user/bids.php [ 12 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/user/bids.php:12
2013-12-09 15:10:15 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/user/bids.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 12, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php(48): Kohana_View->__toString()
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/user/bids.php:12
2013-12-09 15:10:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: merged_bids ~ APPPATH/views/user/bids.php [ 12 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/user/bids.php:12
2013-12-09 15:10:30 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/user/bids.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 12, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php(48): Kohana_View->__toString()
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/user/bids.php:12
2013-12-09 15:14:02 --- EMERGENCY: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, boolean given ~ APPPATH/classes/Controller/User.php [ 127 ] in file:line
2013-12-09 15:14:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_push() ex...', '/Users/Manyahin...', 127, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php(127): array_push(false, Object(Model_Request))
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_User->action_bids()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-12-09 15:14:13 --- EMERGENCY: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, object given ~ APPPATH/classes/Controller/User.php [ 127 ] in file:line
2013-12-09 15:14:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_push() ex...', '/Users/Manyahin...', 127, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php(127): array_push(Object(Model_Request), false)
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_User->action_bids()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-12-09 15:17:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: request ~ APPPATH/views/user/bids.php [ 33 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/user/bids.php:33
2013-12-09 15:17:51 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/user/bids.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 33, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php(48): Kohana_View->__toString()
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/user/bids.php:33
2013-12-09 15:51:41 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Request as array ~ APPPATH/classes/Controller/User.php [ 128 ] in file:line
2013-12-09 15:51:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-09 15:58:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: requests ~ APPPATH/views/Bid/info.php [ 22 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/Bid/info.php:22
2013-12-09 15:58:59 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/Bid/info.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 22, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php(48): Kohana_View->__toString()
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Bid))
#11 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/Bid/info.php:22
2013-12-09 16:17:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_profile ~ APPPATH/views/Bid/accept.php [ 25 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/Bid/accept.php:25
2013-12-09 16:17:54 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/Bid/accept.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 25, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php(48): Kohana_View->__toString()
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Bid))
#11 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/Bid/accept.php:25
2013-12-09 16:59:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: accept ~ APPPATH/views/Bid/list.php [ 48 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/Bid/list.php:48
2013-12-09 16:59:02 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/Bid/list.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 48, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php(48): Kohana_View->__toString()
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Bid))
#11 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/Bid/list.php:48
2013-12-09 17:03:55 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/Bid/list.php [ 45 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/Bid/list.php:45
2013-12-09 17:03:55 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/Bid/list.php(45): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/Manyahin...', 45, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php(48): Kohana_View->__toString()
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Bid))
#11 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/Bid/list.php:45