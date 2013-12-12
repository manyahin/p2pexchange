<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-11 11:48:29 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Route::default() ~ APPPATH/bootstrap.php [ 143 ] in file:line
2013-12-11 11:48:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-11 11:50:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 48 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php:48
2013-12-11 11:50:27 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 48, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Rating))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php:48
2013-12-11 12:00:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/classes/Controller/Rating.php [ 12 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Rating.php:12
2013-12-11 12:00:22 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Rating.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 12, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Rating->action_set()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Rating))
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Rating.php:12
2013-12-11 14:38:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Request::$post ~ APPPATH/classes/Controller/Rating.php [ 19 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Rating.php:19
2013-12-11 14:38:02 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Rating.php(19): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Manyahin...', 19, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Rating->action_set()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Rating))
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Rating.php:19
2013-12-11 14:38:11 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Arr::extract() must be of the type array, none given, called in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Rating.php on line 19 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 301 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Arr.php:301
2013-12-11 14:38:11 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Arr.php(301): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Users/Manyahin...', 301, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Rating.php(19): Kohana_Arr::extract(Array)
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Rating->action_set()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Rating))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Arr.php:301
2013-12-11 14:38:42 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Arr::extract() must be of the type array, none given, called in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Rating.php on line 20 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 301 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Arr.php:301
2013-12-11 14:38:42 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Arr.php(301): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Users/Manyahin...', 301, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Rating.php(20): Kohana_Arr::extract(Array)
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Rating->action_set()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Rating))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Arr.php:301
2013-12-11 14:50:53 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Rating.php:19
2013-12-11 14:50:53 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Rating.php(19): Kohana_ORM->find()
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Rating->action_set()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Rating))
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Rating.php:19
2013-12-11 14:51:23 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Rating.php:16
2013-12-11 14:51:23 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Rating.php(16): Kohana_ORM->find()
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Rating->action_set()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Rating))
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Rating.php:16
2013-12-11 14:51:31 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 991 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Rating.php:16
2013-12-11 14:51:31 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Rating.php(16): Kohana_ORM->find_all()
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Rating->action_set()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Rating))
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Rating.php:16
2013-12-11 15:41:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'endforeach' (T_ENDFOREACH) ~ APPPATH/views/user/bids.php [ 54 ] in file:line
2013-12-11 15:41:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-11 16:08:42 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Rating.php [ 59 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Rating.php:59
2013-12-11 16:08:42 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Rating.php(59): Kohana_Core::error_handler(2, 'Creating defaul...', '/Users/Manyahin...', 59, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Rating->action_set()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Rating))
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Rating.php:59
2013-12-11 16:11:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 58 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php:58
2013-12-11 16:11:58 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 58, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Rating))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php:58
2013-12-11 16:22:59 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/views/user/bids.php [ 52 ] in file:line
2013-12-11 16:22:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-11 16:23:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/views/user/bids.php [ 52 ] in file:line
2013-12-11 16:23:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-11 16:23:26 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/views/user/bids.php [ 52 ] in file:line
2013-12-11 16:23:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-11 19:08:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_profile ~ APPPATH/views/user/profile.php [ 10 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/user/profile.php:10
2013-12-11 19:08:04 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/user/profile.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 10, Array)
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
#14 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/user/profile.php:10
2013-12-11 19:24:48 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Route::default() ~ APPPATH/bootstrap.php [ 143 ] in file:line
2013-12-11 19:24:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-11 19:28:51 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH/classes/Kohana/Route.php [ 261 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Route.php:261
2013-12-11 19:28:51 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Route.php(261): Kohana_Core::error_handler(8, 'Array to string...', '/Users/Manyahin...', 261, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Route.php(330): Kohana_Route::compile('<action>', Array)
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Route.php(93): Kohana_Route->__construct('<action>', Array)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/bootstrap.php(142): Kohana_Route::set('user', '<action>', Array)
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(102): require('/Users/Manyahin...')
#5 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Route.php:261
2013-12-11 19:50:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 49 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php:49
2013-12-11 19:50:25 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 49, Array)
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
2013-12-11 19:50:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 49 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php:49
2013-12-11 19:50:31 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 49, Array)
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
2013-12-11 19:50:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 49 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php:49
2013-12-11 19:50:45 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 49, Array)
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