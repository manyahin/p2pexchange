<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-17 11:39:45 --- EMERGENCY: Swift_TransportException [ 0 ]: Connection could not be established with host  [php_network_getaddresses: getaddrinfo failed: nodename nor servname provided, or not known #0] ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Transport/StreamBuffer.php [ 259 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/email/vendor/swiftmailer/lib/classes/Swift/Transport/StreamBuffer.php:64
2013-12-17 11:39:45 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/email/vendor/swiftmailer/lib/classes/Swift/Transport/StreamBuffer.php(64): Swift_Transport_StreamBuffer->_establishSocketConnection()
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/email/vendor/swiftmailer/lib/classes/Swift/Transport/AbstractSmtpTransport.php(115): Swift_Transport_StreamBuffer->initialize(Array)
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/email/vendor/swiftmailer/lib/classes/Swift/Mailer.php(80): Swift_Transport_AbstractSmtpTransport->start()
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/email/classes/Kohana/Email.php(405): Swift_Mailer->send(Object(Swift_Message), Array)
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Site.php(14): Kohana_Email->send()
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(69): Controller_Site->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Bid))
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/email/vendor/swiftmailer/lib/classes/Swift/Transport/StreamBuffer.php:64
2013-12-17 11:44:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'Swift_Message' not found ~ APPPATH/classes/Controller/Site.php [ 11 ] in file:line
2013-12-17 11:44:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 12:41:35 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$auth_user' (T_VARIABLE) ~ APPPATH/classes/Controller/Site.php [ 14 ] in file:line
2013-12-17 12:41:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 12:41:40 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH/config/p2p.php [ 6 ] in file:line
2013-12-17 12:41:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 12:47:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::loggin_in() ~ APPPATH/classes/Controller/User.php [ 153 ] in file:line
2013-12-17 12:47:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 12:49:07 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Email::send_mail() ~ APPPATH/classes/Controller/User.php [ 191 ] in file:line
2013-12-17 12:49:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 12:51:36 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Email::test() ~ APPPATH/classes/Controller/Site.php [ 11 ] in file:line
2013-12-17 12:51:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 12:54:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Email::test() ~ APPPATH/classes/Controller/Site.php [ 11 ] in file:line
2013-12-17 12:54:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 12:54:27 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Email::test() ~ APPPATH/classes/Controller/Site.php [ 11 ] in file:line
2013-12-17 12:54:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 12:59:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/User.php [ 196 ] in file:line
2013-12-17 12:59:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 15:32:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: subject ~ APPPATH/classes/Controller/Site.php [ 11 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Site.php:11
2013-12-17 15:32:25 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Site.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 11, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(69): Controller_Site->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Site.php:11
2013-12-17 15:32:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Email::test() ~ APPPATH/classes/Controller/Site.php [ 11 ] in file:line
2013-12-17 15:32:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 15:33:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$config' (T_VARIABLE), expecting identifier (T_STRING) or class (T_CLASS) ~ APPPATH/classes/Email.php [ 5 ] in file:line
2013-12-17 15:33:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 15:37:26 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/Email.php [ 17 ] in file:line
2013-12-17 15:37:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 15:37:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting ',' or ';' ~ APPPATH/classes/Email.php [ 17 ] in file:line
2013-12-17 15:37:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 15:37:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: this ~ APPPATH/classes/Email.php [ 17 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Email.php:17
2013-12-17 15:37:48 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Email.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 17, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Site.php(11): Email::test()
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(69): Controller_Site->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Email.php:17
2013-12-17 15:37:54 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Email::$settings ~ APPPATH/classes/Email.php [ 17 ] in file:line
2013-12-17 15:37:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 15:43:00 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Email::test() ~ APPPATH/classes/Controller/Site.php [ 11 ] in file:line
2013-12-17 15:43:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 15:43:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: from ~ APPPATH/classes/Email.php [ 11 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Email.php:11
2013-12-17 15:43:58 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Email.php(11): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Manyahin...', 11, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php(190): Email::send_mail('i.manyahin@gmai...', 'Verify My Email...', '<p>Please click...')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Email.php:11
2013-12-17 15:46:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: mail ~ APPPATH/classes/Email.php [ 14 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Email.php:14
2013-12-17 15:46:44 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Email.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 14, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php(190): Email::send_mail('i.manyahin@gmai...', 'Verify My Email...', '<p>Please click...')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Email.php:14
2013-12-17 15:49:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Request::$id ~ APPPATH/classes/Controller/User.php [ 213 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php:213
2013-12-17 15:49:59 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php(213): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Manyahin...', 213, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_User->action_verify()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php:213
2013-12-17 15:51:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/classes/Controller/User.php [ 243 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php:243
2013-12-17 15:51:42 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php(243): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 243, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_User->action_verify()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php:243
2013-12-17 15:55:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/classes/Model/User.php [ 34 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Model/User.php:34
2013-12-17 15:55:16 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Model/User.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 34, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/User.php(216): Model_User->verify_hash()
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_User->action_verify()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Model/User.php:34