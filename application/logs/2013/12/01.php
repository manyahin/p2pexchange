<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-01 12:54:08 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Connection refused ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/database/classes/Kohana/Database/MySQL.php:171
2013-12-01 12:54:08 --- DEBUG: #0 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('requests')
#3 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/application/classes/Controller/Request.php(10): Kohana_ORM::factory('request')
#8 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Request->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#11 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/database/classes/Kohana/Database/MySQL.php:171
2013-12-01 17:03:26 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'request_id' cannot be null [ INSERT INTO `request_method` (`request_id`, `method_id`) VALUES (NULL, '6') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/database/classes/Kohana/Database/Query.php:251
2013-12-01 17:03:26 --- DEBUG: #0 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `re...', false, Array)
#1 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/application/classes/Controller/Request.php(81): Kohana_ORM->add('methods', '6')
#3 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Request->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#6 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/database/classes/Kohana/Database/Query.php:251
2013-12-01 17:28:02 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/views/request/list.php [ 27 ] in /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/application/views/request/list.php:27
2013-12-01 17:28:02 --- DEBUG: #0 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/application/views/request/list.php(27): Kohana_Core::error_handler(4096, 'Object of class...', '/Users/Manyahin...', 27, Array)
#1 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#2 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#3 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/application/views/site.php(45): Kohana_View->__toString()
#5 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#6 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#7 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#11 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/application/views/request/list.php:27
2013-12-01 17:33:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: request ~ APPPATH/classes/Controller/Request.php [ 11 ] in /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/application/classes/Controller/Request.php:11
2013-12-01 17:33:47 --- DEBUG: #0 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/application/classes/Controller/Request.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 11, Array)
#1 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Request->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#4 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/application/classes/Controller/Request.php:11
2013-12-01 17:34:15 --- EMERGENCY: Kohana_Exception [ 0 ]: The methods property does not exist in the Model_Request class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:702
2013-12-01 17:34:15 --- DEBUG: #0 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('methods', '123')
#1 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/application/classes/Controller/Request.php(13): Kohana_ORM->__set('methods', '123')
#2 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Request->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#5 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:702
2013-12-01 17:34:54 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/Controller/Request.php [ 14 ] in /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/application/classes/Controller/Request.php:14
2013-12-01 17:34:54 --- DEBUG: #0 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/application/classes/Controller/Request.php(14): Kohana_Core::error_handler(4096, 'Object of class...', '/Users/Manyahin...', 14, Array)
#1 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Request->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#4 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/application/classes/Controller/Request.php:14
2013-12-01 17:44:25 --- EMERGENCY: Kohana_Exception [ 0 ]: The methods property does not exist in the Model_Request class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:702
2013-12-01 17:44:25 --- DEBUG: #0 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('methods', Object(Database_MySQL_Result))
#1 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/application/classes/Controller/Request.php(14): Kohana_ORM->__set('methods', Object(Database_MySQL_Result))
#2 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Request->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#5 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:702
2013-12-01 17:46:14 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Request as array ~ APPPATH/classes/Controller/Request.php [ 14 ] in file:line
2013-12-01 17:46:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-01 17:50:36 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Request.php [ 11 ] in file:line
2013-12-01 17:50:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-01 17:50:43 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Request.php [ 13 ] in file:line
2013-12-01 17:50:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-01 17:50:46 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Request.php [ 13 ] in file:line
2013-12-01 17:50:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-01 17:52:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: requests ~ APPPATH/classes/Controller/Request.php [ 10 ] in /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/application/classes/Controller/Request.php:10
2013-12-01 17:52:12 --- DEBUG: #0 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/application/classes/Controller/Request.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 10, Array)
#1 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Request->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#4 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/application/classes/Controller/Request.php:10
2013-12-01 18:15:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: methods ~ APPPATH/classes/Controller/Request.php [ 79 ] in /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/application/classes/Controller/Request.php:79
2013-12-01 18:15:22 --- DEBUG: #0 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/application/classes/Controller/Request.php(79): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Manyahin...', 79, Array)
#1 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Request->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#4 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/application/classes/Controller/Request.php:79