<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-18 17:50:40 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/User.php [ 227 ] in file:line
2013-12-18 17:50:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-18 17:51:41 --- EMERGENCY: View_Exception [ 0 ]: The requested view user/terms could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php:137
2013-12-18 17:51:41 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('user/terms')
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('user/terms', NULL)
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php(292): Kohana_View::factory('user/terms')
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_User->action_terms()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php:137
2013-12-18 17:55:05 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Site.php [ 21 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Site.php:21
2013-12-18 17:55:05 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Site.php(21): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/Manyahin...', 21, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(69): Controller_Site->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Site.php:21
2013-12-18 17:55:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-12-18 17:55:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-18 17:56:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method HTML::button() ~ APPPATH/views/user/terms.php [ 10 ] in file:line
2013-12-18 17:56:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-18 17:56:22 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method HTML::button() ~ APPPATH/views/user/terms.php [ 10 ] in file:line
2013-12-18 17:56:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-18 18:04:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 49 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php:49
2013-12-18 18:04:25 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 49, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_My))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php:49
2013-12-18 19:49:20 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Kohana_URL::title(), called in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Site.php on line 24 and defined ~ SYSPATH/classes/Kohana/URL.php [ 190 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/URL.php:190
2013-12-18 19:49:20 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/URL.php(190): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/Manyahin...', 190, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Site.php(24): Kohana_URL::title()
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(69): Controller_Site->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/URL.php:190
2013-12-18 19:51:23 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Kohana_Request::uri() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/Controller/Site.php [ 24 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Site.php:24
2013-12-18 19:51:23 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Site.php(24): Kohana_Core::error_handler(2048, 'Non-static meth...', '/Users/Manyahin...', 24, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(69): Controller_Site->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Site.php:24