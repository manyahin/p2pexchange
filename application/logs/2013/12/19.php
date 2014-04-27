<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-19 12:13:31 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Kohana_Request::controller() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/Controller/Site.php [ 58 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Site.php:58
2013-12-19 12:13:31 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Site.php(58): Kohana_Core::error_handler(2048, 'Non-static meth...', '/Users/Manyahin...', 58, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(69): Controller_Site->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Site.php:58
2013-12-19 12:14:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Request::$controller ~ APPPATH/classes/Controller/Site.php [ 60 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Site.php:60
2013-12-19 12:14:59 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Site.php(60): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Manyahin...', 60, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(69): Controller_Site->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Site.php:60
2013-12-19 12:39:38 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH/classes/Kohana/HTML.php [ 71 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/HTML.php:71
2013-12-19 12:39:38 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/HTML.php(71): Kohana_Core::error_handler(8, 'Array to string...', '/Users/Manyahin...', 71, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/HTML.php(338): Kohana_HTML::chars(Array)
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Form.php(107): Kohana_HTML::attributes(Array)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Form.php(185): Kohana_Form::input('remember', Array, Array)
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/user/login.php(18): Kohana_Form::checkbox('remember', Array)
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php(49): Kohana_View->__toString()
#9 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#10 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#11 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#15 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#18 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/HTML.php:71
2013-12-19 12:46:59 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH/classes/Kohana/HTML.php [ 71 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/HTML.php:71
2013-12-19 12:46:59 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/HTML.php(71): Kohana_Core::error_handler(8, 'Array to string...', '/Users/Manyahin...', 71, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/HTML.php(338): Kohana_HTML::chars(Array)
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Form.php(107): Kohana_HTML::attributes(Array)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Form.php(185): Kohana_Form::input('remember', Array, Array)
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/user/login.php(18): Kohana_Form::checkbox('remember', Array)
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php(49): Kohana_View->__toString()
#9 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#10 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#11 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#15 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#18 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/HTML.php:71
2013-12-19 13:08:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user/forgot_password' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-12-19 13:08:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-19 15:45:30 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function verify_hash() on a non-object ~ APPPATH/classes/Controller/User.php [ 358 ] in file:line
2013-12-19 15:45:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-19 15:53:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$verify_link' (T_VARIABLE) ~ APPPATH/classes/Controller/User.php [ 362 ] in file:line
2013-12-19 15:53:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-19 15:54:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Validation::$email ~ APPPATH/classes/Controller/User.php [ 357 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php:357
2013-12-19 15:54:57 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php(357): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Manyahin...', 357, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_User->action_forgot_password()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php:357
2013-12-19 16:01:32 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function verify_password_hash() on a non-object ~ APPPATH/classes/Controller/User.php [ 363 ] in file:line
2013-12-19 16:01:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-19 16:02:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/user/forgot_password.php [ 12 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/user/forgot_password.php:12
2013-12-19 16:02:55 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/user/forgot_password.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 12, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php(49): Kohana_View->__toString()
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/user/forgot_password.php:12