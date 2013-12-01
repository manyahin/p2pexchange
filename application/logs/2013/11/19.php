<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-19 11:37:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category_currency' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-11-19 11:37:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-19 11:38:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Category_Currency' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-11-19 11:38:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-19 11:42:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category_currency' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-11-19 11:42:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-19 11:43:03 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Category_Currency' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-11-19 11:43:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-19 11:45:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Category_Currency' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-11-19 11:45:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-19 11:45:23 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Category_Currency' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-11-19 11:45:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-19 11:50:35 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/Request/create.php [ 16 ] in /Users/Manyahin/p2pexchange/application/views/Request/create.php:16
2013-11-19 11:50:35 --- DEBUG: #0 /Users/Manyahin/p2pexchange/application/views/Request/create.php(16): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/Manyahin...', 16, Array)
#1 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#2 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#3 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Manyahin/p2pexchange/application/views/site.php(44): Kohana_View->__toString()
#5 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#6 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#7 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#11 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/Manyahin/p2pexchange/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/Manyahin/p2pexchange/application/views/Request/create.php:16
2013-11-19 11:50:49 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/Request/create.php [ 19 ] in /Users/Manyahin/p2pexchange/application/views/Request/create.php:19
2013-11-19 11:50:49 --- DEBUG: #0 /Users/Manyahin/p2pexchange/application/views/Request/create.php(19): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/Manyahin...', 19, Array)
#1 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#2 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#3 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Manyahin/p2pexchange/application/views/site.php(44): Kohana_View->__toString()
#5 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#6 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#7 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#11 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/Manyahin/p2pexchange/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/Manyahin/p2pexchange/application/views/Request/create.php:19
2013-11-19 11:51:23 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/Request/create.php [ 16 ] in /Users/Manyahin/p2pexchange/application/views/Request/create.php:16
2013-11-19 11:51:23 --- DEBUG: #0 /Users/Manyahin/p2pexchange/application/views/Request/create.php(16): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/Manyahin...', 16, Array)
#1 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#2 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#3 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Manyahin/p2pexchange/application/views/site.php(44): Kohana_View->__toString()
#5 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#6 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#7 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#11 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/Manyahin/p2pexchange/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/Manyahin/p2pexchange/application/views/Request/create.php:16