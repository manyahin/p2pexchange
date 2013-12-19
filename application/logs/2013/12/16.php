<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-16 12:47:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH/views/user/create.php [ 8 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/user/create.php:8
2013-12-16 12:47:48 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/user/create.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 8, Array)
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
#14 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/user/create.php:8
2013-12-16 13:11:46 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'test' not found ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2013-12-16 13:11:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/Users/Manyahin...', 377, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1273): Kohana_Validation->check()
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(Object(Validation))
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Model/Auth/User.php(173): Kohana_ORM->create(Object(Validation))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php(167): Model_Auth_User->create_user(Array, Array)
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2013-12-16 13:11:53 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'test' not found ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2013-12-16 13:11:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/Users/Manyahin...', 377, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1273): Kohana_Validation->check()
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(Object(Validation))
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Model/Auth/User.php(173): Kohana_ORM->create(Object(Validation))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php(167): Model_Auth_User->create_user(Array, Array)
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2013-12-16 13:12:02 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'hello' ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2013-12-16 13:12:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/Users/Manyahin...', 377, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1273): Kohana_Validation->check()
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(Object(Validation))
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Model/Auth/User.php(173): Kohana_ORM->create(Object(Validation))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php(167): Model_Auth_User->create_user(Array, Array)
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2013-12-16 14:58:38 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE) ~ APPPATH/classes/Controller/User.php [ 166 ] in file:line
2013-12-16 14:58:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-16 15:02:03 --- EMERGENCY: Kohana_Exception [ 0 ]: The password_confirm property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:702
2013-12-16 15:02:03 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('password_confir...', '')
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(804): Kohana_ORM->__set('password_confir...', '')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Model/Auth/User.php(169): Kohana_ORM->values(Array, Array)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php(170): Model_Auth_User->create_user(Array, Array)
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:702
2013-12-16 15:02:16 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN) ~ MODPATH/orm/classes/Model/Auth/User.php [ 168 ] in file:line
2013-12-16 15:02:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-16 15:02:22 --- EMERGENCY: Kohana_Exception [ 0 ]: The password_confirm property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:702
2013-12-16 15:02:22 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('password_confir...', '')
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(804): Kohana_ORM->__set('password_confir...', '')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Model/Auth/User.php(168): Kohana_ORM->values(Array, Array)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php(170): Model_Auth_User->create_user(Array, Array)
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:702
2013-12-16 15:02:55 --- EMERGENCY: Kohana_Exception [ 0 ]: The password_confirm property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:702
2013-12-16 15:02:55 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('password_confir...', '')
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(804): Kohana_ORM->__set('password_confir...', '')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Model/Auth/User.php(167): Kohana_ORM->values(Array, Array)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php(170): Model_Auth_User->create_user(Array, Array)
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:702
2013-12-16 16:12:36 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_User::logged_in() ~ APPPATH/classes/Controller/User.php [ 152 ] in file:line
2013-12-16 16:12:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-16 16:12:59 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function logged_in() on a non-object ~ APPPATH/classes/Controller/User.php [ 152 ] in file:line
2013-12-16 16:12:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-16 16:13:51 --- EMERGENCY: ErrorException [ 1 ]: Cannot instantiate abstract class Auth ~ APPPATH/classes/Controller/User.php [ 152 ] in file:line
2013-12-16 16:13:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-16 16:15:07 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::loggin_in() ~ APPPATH/classes/Controller/User.php [ 152 ] in file:line
2013-12-16 16:15:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-16 16:27:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: email ~ APPPATH/classes/Controller/User.php [ 202 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php:202
2013-12-16 16:27:14 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php(202): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 202, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_User->action_verify()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php:202
2013-12-16 16:29:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'uth' not found ~ APPPATH/classes/Controller/User.php [ 199 ] in file:line
2013-12-16 16:29:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-16 16:29:22 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method HTML::input() ~ APPPATH/views/user/verify.php [ 10 ] in file:line
2013-12-16 16:29:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-16 16:31:01 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_Form::button(), called in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/user/verify.php on line 12 and defined ~ SYSPATH/classes/Kohana/Form.php [ 401 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Form.php:401
2013-12-16 16:31:01 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Form.php(401): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/Manyahin...', 401, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/user/verify.php(12): Kohana_Form::button('Update Email')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php(49): Kohana_View->__toString()
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Form.php:401
2013-12-16 16:48:55 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/User.php [ 206 ] in file:line
2013-12-16 16:48:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-16 16:49:15 --- EMERGENCY: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH/classes/Controller/User.php [ 213 ] in file:line
2013-12-16 16:49:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-16 16:56:12 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function errors() on a non-object ~ APPPATH/classes/Controller/User.php [ 212 ] in file:line
2013-12-16 16:56:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-16 17:07:15 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/User.php [ 220 ] in file:line
2013-12-16 17:07:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-16 17:11:20 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/user/verify.php [ 14 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/user/verify.php:14
2013-12-16 17:11:20 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/user/verify.php(14): Kohana_Core::error_handler(8, 'Array to string...', '/Users/Manyahin...', 14, Array)
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
#14 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/user/verify.php:14
2013-12-16 17:13:42 --- EMERGENCY: ErrorException [ 2 ]: mb_strlen() expects parameter 1 to be string, object given ~ SYSPATH/classes/Kohana/UTF8.php [ 168 ] in file:line
2013-12-16 17:13:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mb_strlen() exp...', '/Users/Manyahin...', 168, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/UTF8.php(168): mb_strlen(Object(Validation), 'utf-8')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Valid.php(112): Kohana_UTF8::strlen(Object(Validation))
#3 [internal function]: Kohana_Valid::email(Object(Validation))
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1273): Kohana_Validation->check()
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1362): Kohana_ORM->check(NULL)
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->update(NULL)
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php(213): Kohana_ORM->save()
#9 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_User->action_verify()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2013-12-16 17:14:33 --- EMERGENCY: ErrorException [ 2 ]: mb_strlen() expects parameter 1 to be string, object given ~ SYSPATH/classes/Kohana/UTF8.php [ 168 ] in file:line
2013-12-16 17:14:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mb_strlen() exp...', '/Users/Manyahin...', 168, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/UTF8.php(168): mb_strlen(Object(Validation), 'utf-8')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Valid.php(112): Kohana_UTF8::strlen(Object(Validation))
#3 [internal function]: Kohana_Valid::email(Object(Validation))
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1273): Kohana_Validation->check()
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1362): Kohana_ORM->check(NULL)
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->update(NULL)
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php(213): Kohana_ORM->save()
#9 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_User->action_verify()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2013-12-16 17:14:56 --- EMERGENCY: ErrorException [ 2 ]: mb_strlen() expects parameter 1 to be string, object given ~ SYSPATH/classes/Kohana/UTF8.php [ 168 ] in file:line
2013-12-16 17:14:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mb_strlen() exp...', '/Users/Manyahin...', 168, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/UTF8.php(168): mb_strlen(Object(Validation), 'utf-8')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Valid.php(112): Kohana_UTF8::strlen(Object(Validation))
#3 [internal function]: Kohana_Valid::email(Object(Validation))
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1273): Kohana_Validation->check()
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1362): Kohana_ORM->check(NULL)
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->update(NULL)
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php(213): Kohana_ORM->save()
#9 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_User->action_verify()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2013-12-16 17:16:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Validation::$email ~ APPPATH/classes/Controller/User.php [ 212 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php:212
2013-12-16 17:16:06 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php(212): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Manyahin...', 212, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_User->action_verify()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php:212
2013-12-16 17:16:41 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Validation could not be converted to string ~ APPPATH/classes/Controller/User.php [ 217 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php:217
2013-12-16 17:16:41 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php(217): Kohana_Core::error_handler(4096, 'Object of class...', '/Users/Manyahin...', 217, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_User->action_verify()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php:217
2013-12-16 17:32:13 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Site.php [ 21 ] in file:line
2013-12-16 17:32:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-16 18:02:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Bid::user_valid() ~ APPPATH/classes/Controller/Bid.php [ 38 ] in file:line
2013-12-16 18:02:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line