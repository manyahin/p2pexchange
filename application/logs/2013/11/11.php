<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-11 08:26:56 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/Manyahin/p2pexchange/system/classes/Kohana/Cookie.php:67
2013-11-11 08:26:56 --- DEBUG: #0 /Users/Manyahin/p2pexchange/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('connect_sid', NULL)
#1 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('connect_sid')
#2 /Users/Manyahin/p2pexchange/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/Manyahin/p2pexchange/system/classes/Kohana/Cookie.php:67
2013-11-11 08:27:02 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/Manyahin/p2pexchange/system/classes/Kohana/Cookie.php:67
2013-11-11 08:27:02 --- DEBUG: #0 /Users/Manyahin/p2pexchange/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('connect_sid', NULL)
#1 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('connect_sid')
#2 /Users/Manyahin/p2pexchange/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/Manyahin/p2pexchange/system/classes/Kohana/Cookie.php:67
2013-11-11 16:32:01 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/Manyahin/p2pexchange/system/classes/Kohana/Cookie.php:67
2013-11-11 16:32:01 --- DEBUG: #0 /Users/Manyahin/p2pexchange/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('connect_sid', NULL)
#1 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('connect_sid')
#2 /Users/Manyahin/p2pexchange/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/Manyahin/p2pexchange/system/classes/Kohana/Cookie.php:67
2013-11-11 16:35:10 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/Manyahin/p2pexchange/system/classes/Kohana/Cookie.php:67
2013-11-11 16:35:10 --- DEBUG: #0 /Users/Manyahin/p2pexchange/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('connect_sid', NULL)
#1 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('connect_sid')
#2 /Users/Manyahin/p2pexchange/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/Manyahin/p2pexchange/system/classes/Kohana/Cookie.php:67
2013-11-11 17:03:07 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Request.php [ 16 ] in /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php:16
2013-11-11 17:03:07 --- DEBUG: #0 /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php(16): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Users/Manyahin...', 16, Array)
#1 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller.php(84): Controller_Request->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#4 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/p2pexchange/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php:16
2013-11-11 17:06:29 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Request.php [ 16 ] in /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php:16
2013-11-11 17:06:29 --- DEBUG: #0 /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php(16): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Users/Manyahin...', 16, Array)
#1 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller.php(84): Controller_Request->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#4 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/p2pexchange/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php:16
2013-11-11 17:09:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: some ~ APPPATH/views/site.php [ 8 ] in /Users/Manyahin/p2pexchange/application/views/site.php:8
2013-11-11 17:09:01 --- DEBUG: #0 /Users/Manyahin/p2pexchange/application/views/site.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 8, Array)
#1 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#2 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#3 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#7 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Manyahin/p2pexchange/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/Manyahin/p2pexchange/application/views/site.php:8
2013-11-11 17:09:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/site.php [ 10 ] in /Users/Manyahin/p2pexchange/application/views/site.php:10
2013-11-11 17:09:16 --- DEBUG: #0 /Users/Manyahin/p2pexchange/application/views/site.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 10, Array)
#1 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#2 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#3 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#7 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Manyahin/p2pexchange/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/Manyahin/p2pexchange/application/views/site.php:10
2013-11-11 17:09:58 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Request.php [ 10 ] in /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php:10
2013-11-11 17:09:58 --- DEBUG: #0 /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php(10): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Users/Manyahin...', 10, Array)
#1 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller.php(84): Controller_Request->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#4 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/p2pexchange/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php:10
2013-11-11 17:10:11 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Request.php [ 10 ] in /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php:10
2013-11-11 17:10:11 --- DEBUG: #0 /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php(10): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Users/Manyahin...', 10, Array)
#1 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller.php(84): Controller_Request->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#4 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/p2pexchange/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php:10
2013-11-11 17:10:19 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Request.php [ 8 ] in /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php:8
2013-11-11 17:10:19 --- DEBUG: #0 /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php(8): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Users/Manyahin...', 8, Array)
#1 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller.php(84): Controller_Request->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#4 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/p2pexchange/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php:8
2013-11-11 17:10:20 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Request.php [ 8 ] in /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php:8
2013-11-11 17:10:20 --- DEBUG: #0 /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php(8): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Users/Manyahin...', 8, Array)
#1 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller.php(84): Controller_Request->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#4 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/p2pexchange/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php:8
2013-11-11 18:08:02 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): No such file or directory ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/Manyahin/p2pexchange/modules/database/classes/Kohana/Database/MySQL.php:171
2013-11-11 18:08:02 --- DEBUG: #0 /Users/Manyahin/p2pexchange/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/Manyahin/p2pexchange/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php(8): Kohana_Database_Query->execute()
#3 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller.php(84): Controller_Request->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#6 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Manyahin/p2pexchange/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Manyahin/p2pexchange/modules/database/classes/Kohana/Database/MySQL.php:171
2013-11-11 18:09:18 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): No such file or directory ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/Manyahin/p2pexchange/modules/database/classes/Kohana/Database/MySQL.php:171
2013-11-11 18:09:18 --- DEBUG: #0 /Users/Manyahin/p2pexchange/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/Manyahin/p2pexchange/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php(8): Kohana_Database_Query->execute()
#3 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller.php(84): Controller_Request->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#6 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Manyahin/p2pexchange/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Manyahin/p2pexchange/modules/database/classes/Kohana/Database/MySQL.php:171
2013-11-11 18:09:49 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): No such file or directory ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/Manyahin/p2pexchange/modules/database/classes/Kohana/Database/MySQL.php:171
2013-11-11 18:09:49 --- DEBUG: #0 /Users/Manyahin/p2pexchange/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/Manyahin/p2pexchange/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php(8): Kohana_Database_Query->execute()
#3 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller.php(84): Controller_Request->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#6 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Manyahin/p2pexchange/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Manyahin/p2pexchange/modules/database/classes/Kohana/Database/MySQL.php:171
2013-11-11 18:10:57 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH/classes/Controller/Request.php [ 8 ] in file:line
2013-11-11 18:10:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-11 18:10:58 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH/classes/Controller/Request.php [ 8 ] in file:line
2013-11-11 18:10:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-11 18:14:58 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/views/site.php [ 27 ] in file:line
2013-11-11 18:14:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-11 18:15:46 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/site.php [ 28 ] in /Users/Manyahin/p2pexchange/application/views/site.php:28
2013-11-11 18:15:46 --- DEBUG: #0 /Users/Manyahin/p2pexchange/application/views/site.php(28): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/Manyahin...', 28, Array)
#1 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#2 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#3 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#7 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Manyahin/p2pexchange/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/Manyahin/p2pexchange/application/views/site.php:28
2013-11-11 18:17:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH/views/site.php [ 27 ] in /Users/Manyahin/p2pexchange/application/views/site.php:27
2013-11-11 18:17:31 --- DEBUG: #0 /Users/Manyahin/p2pexchange/application/views/site.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 27, Array)
#1 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#2 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#3 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Manyahin/p2pexchange/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/Manyahin/p2pexchange/application/views/site.php:27
2013-11-11 18:18:29 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/User.php [ 86 ] in file:line
2013-11-11 18:18:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-11 18:22:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-11-11 18:22:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-11 18:24:23 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Kohana_Auth::get_user() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/Controller/Request.php [ 10 ] in /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php:10
2013-11-11 18:24:23 --- DEBUG: #0 /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php(10): Kohana_Core::error_handler(2048, 'Non-static meth...', '/Users/Manyahin...', 10, Array)
#1 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller.php(84): Controller_Request->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#4 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/p2pexchange/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php:10
2013-11-11 18:39:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-11-11 18:39:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-11 18:41:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: r ~ APPPATH/classes/Controller/Request.php [ 13 ] in /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php:13
2013-11-11 18:41:13 --- DEBUG: #0 /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 13, Array)
#1 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller.php(84): Controller_Request->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#4 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/p2pexchange/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php:13
2013-11-11 18:43:20 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function add() on a non-object ~ APPPATH/classes/Controller/Request.php [ 13 ] in file:line
2013-11-11 18:43:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-11 18:50:04 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant ‘roles’ - assumed '‘roles’' ~ APPPATH/classes/Controller/Request.php [ 15 ] in /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php:15
2013-11-11 18:50:04 --- DEBUG: #0 /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/Manyahin...', 15, Array)
#1 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller.php(84): Controller_Request->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#4 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/p2pexchange/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php:15
2013-11-11 18:50:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Request::$user ~ APPPATH/classes/Controller/Request.php [ 13 ] in /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php:13
2013-11-11 18:50:50 --- DEBUG: #0 /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Manyahin...', 13, Array)
#1 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller.php(84): Controller_Request->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#4 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/p2pexchange/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php:13
2013-11-11 18:53:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/classes/Controller/Request.php [ 24 ] in /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php:24
2013-11-11 18:53:28 --- DEBUG: #0 /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 24, Array)
#1 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller.php(84): Controller_Request->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#4 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/p2pexchange/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php:24
2013-11-11 18:53:59 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/User.php [ 71 ] in file:line
2013-11-11 18:53:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-11 18:56:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Request::$user ~ APPPATH/classes/Controller/Request.php [ 12 ] in /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php:12
2013-11-11 18:56:51 --- DEBUG: #0 /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Manyahin...', 12, Array)
#1 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller.php(84): Controller_Request->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#4 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/p2pexchange/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php:12
2013-11-11 18:57:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Request::$user ~ APPPATH/classes/Controller/Request.php [ 12 ] in /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php:12
2013-11-11 18:57:20 --- DEBUG: #0 /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Manyahin...', 12, Array)
#1 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller.php(84): Controller_Request->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#4 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/p2pexchange/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php:12
2013-11-11 18:57:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Request::$user ~ APPPATH/classes/Controller/Request.php [ 12 ] in /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php:12
2013-11-11 18:57:22 --- DEBUG: #0 /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Manyahin...', 12, Array)
#1 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller.php(84): Controller_Request->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#4 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/p2pexchange/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php:12
2013-11-11 18:57:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Request::$user ~ APPPATH/classes/Controller/Request.php [ 12 ] in /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php:12
2013-11-11 18:57:33 --- DEBUG: #0 /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Manyahin...', 12, Array)
#1 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller.php(84): Controller_Request->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#4 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/p2pexchange/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php:12
2013-11-11 18:58:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/classes/Controller/Request.php [ 18 ] in /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php:18
2013-11-11 18:58:44 --- DEBUG: #0 /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 18, Array)
#1 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller.php(84): Controller_Request->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#4 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/p2pexchange/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/p2pexchange/application/classes/Controller/Request.php:18
2013-11-11 19:55:19 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Currency as array ~ APPPATH/views/Request/create.php [ 36 ] in file:line
2013-11-11 19:55:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-11 20:07:09 --- EMERGENCY: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Request class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/Manyahin/p2pexchange/modules/orm/classes/Kohana/ORM.php:603
2013-11-11 20:07:09 --- DEBUG: #0 /Users/Manyahin/p2pexchange/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('user')
#1 /Users/Manyahin/p2pexchange/application/views/request/list.php(13): Kohana_ORM->__get('user')
#2 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#3 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#4 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/Manyahin/p2pexchange/application/views/site.php(36): Kohana_View->__toString()
#6 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#7 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#8 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#12 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Manyahin/p2pexchange/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Manyahin/p2pexchange/modules/orm/classes/Kohana/ORM.php:603
2013-11-11 20:07:24 --- EMERGENCY: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Request class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/Manyahin/p2pexchange/modules/orm/classes/Kohana/ORM.php:603
2013-11-11 20:07:24 --- DEBUG: #0 /Users/Manyahin/p2pexchange/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('user')
#1 /Users/Manyahin/p2pexchange/application/views/request/list.php(13): Kohana_ORM->__get('user')
#2 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#3 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#4 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/Manyahin/p2pexchange/application/views/site.php(36): Kohana_View->__toString()
#6 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#7 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#8 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#12 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Manyahin/p2pexchange/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Manyahin/p2pexchange/modules/orm/classes/Kohana/ORM.php:603
2013-11-11 20:07:28 --- EMERGENCY: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Request class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/Manyahin/p2pexchange/modules/orm/classes/Kohana/ORM.php:603
2013-11-11 20:07:28 --- DEBUG: #0 /Users/Manyahin/p2pexchange/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('user')
#1 /Users/Manyahin/p2pexchange/application/views/request/list.php(13): Kohana_ORM->__get('user')
#2 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#3 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#4 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/Manyahin/p2pexchange/application/views/site.php(36): Kohana_View->__toString()
#6 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#7 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#8 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#12 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Manyahin/p2pexchange/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Manyahin/p2pexchange/modules/orm/classes/Kohana/ORM.php:603