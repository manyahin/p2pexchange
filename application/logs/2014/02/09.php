<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-09 14:54:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'Phone' (T_STRING) ~ APPPATH/views/user/profile.php [ 31 ] in file:line
2014-02-09 14:54:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-09 14:54:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'Phone' (T_STRING) ~ APPPATH/views/user/profile.php [ 31 ] in file:line
2014-02-09 14:54:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-09 15:55:37 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH/classes/Kohana/HTML.php [ 71 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/HTML.php:71
2014-02-09 15:55:37 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/HTML.php(71): Kohana_Core::error_handler(8, 'Array to string...', '/Users/Manyahin...', 71, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/HTML.php(338): Kohana_HTML::chars(Array)
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Form.php(107): Kohana_HTML::attributes(Array)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/user/profile.php(35): Kohana_Form::input('phone_code', Array)
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php(58): Kohana_View->__toString()
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#9 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#10 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#11 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#14 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#17 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/HTML.php:71
2014-02-09 15:55:37 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH/classes/Kohana/HTML.php [ 71 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/HTML.php:71
2014-02-09 15:55:37 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/HTML.php(71): Kohana_Core::error_handler(8, 'Array to string...', '/Users/Manyahin...', 71, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/HTML.php(338): Kohana_HTML::chars(Array)
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Form.php(107): Kohana_HTML::attributes(Array)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/user/profile.php(35): Kohana_Form::input('phone_code', Array)
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php(58): Kohana_View->__toString()
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#9 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#10 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#11 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#14 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#17 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/HTML.php:71
2014-02-09 15:55:37 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH/classes/Kohana/HTML.php [ 71 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/HTML.php:71
2014-02-09 15:55:37 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/HTML.php(71): Kohana_Core::error_handler(8, 'Array to string...', '/Users/Manyahin...', 71, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/HTML.php(338): Kohana_HTML::chars(Array)
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Form.php(107): Kohana_HTML::attributes(Array)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/user/profile.php(35): Kohana_Form::input('phone_code', Array)
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php(58): Kohana_View->__toString()
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#9 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#10 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#11 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#14 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#17 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/HTML.php:71
2014-02-09 15:55:37 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH/classes/Kohana/HTML.php [ 71 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/HTML.php:71
2014-02-09 15:55:37 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/HTML.php(71): Kohana_Core::error_handler(8, 'Array to string...', '/Users/Manyahin...', 71, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/HTML.php(338): Kohana_HTML::chars(Array)
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Form.php(107): Kohana_HTML::attributes(Array)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/user/profile.php(35): Kohana_Form::input('phone_code', Array)
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php(58): Kohana_View->__toString()
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#9 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#10 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#11 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#14 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#17 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/HTML.php:71
2014-02-09 15:55:48 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH/classes/Kohana/HTML.php [ 71 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/HTML.php:71
2014-02-09 15:55:48 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/HTML.php(71): Kohana_Core::error_handler(8, 'Array to string...', '/Users/Manyahin...', 71, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/HTML.php(338): Kohana_HTML::chars(Array)
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Form.php(107): Kohana_HTML::attributes(Array)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/user/profile.php(35): Kohana_Form::input('phone_code', Array)
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php(58): Kohana_View->__toString()
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#9 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#10 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#11 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#14 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#17 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/HTML.php:71
2014-02-09 16:22:48 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH/classes/Kohana/HTML.php [ 71 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/HTML.php:71
2014-02-09 16:22:48 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/HTML.php(71): Kohana_Core::error_handler(8, 'Array to string...', '/Users/Manyahin...', 71, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/HTML.php(338): Kohana_HTML::chars(Array)
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Form.php(107): Kohana_HTML::attributes(Array)
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/user/profile.php(35): Kohana_Form::input('phone_code', Array)
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/views/template.php(58): Kohana_View->__toString()
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#9 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#10 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#11 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#14 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#17 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/HTML.php:71