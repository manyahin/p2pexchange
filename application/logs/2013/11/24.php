<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-24 12:06:40 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Connection refused ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/database/classes/Kohana/Database/MySQL.php:171
2013-11-24 12:06:40 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('requests')
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Request.php(10): Kohana_ORM::factory('request')
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Request->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#11 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/database/classes/Kohana/Database/MySQL.php:171
2013-11-24 18:31:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: method ~ MODPATH/orm/classes/Kohana/ORM.php [ 1567 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:1567
2013-11-24 18:31:24 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Manyahin...', 1567, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Request.php(80): Kohana_ORM->add('method', '2')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Request->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:1567
2013-11-24 18:34:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: method ~ MODPATH/orm/classes/Kohana/ORM.php [ 1567 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:1567
2013-11-24 18:34:07 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Manyahin...', 1567, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Request.php(80): Kohana_ORM->add('method', '2')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Request->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:1567
2013-11-24 18:34:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: method ~ MODPATH/orm/classes/Kohana/ORM.php [ 1567 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:1567
2013-11-24 18:34:14 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Manyahin...', 1567, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Request.php(80): Kohana_ORM->add('method', '2')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Request->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:1567
2013-11-24 18:34:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: method ~ MODPATH/orm/classes/Kohana/ORM.php [ 1567 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:1567
2013-11-24 18:34:22 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Manyahin...', 1567, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Request.php(80): Kohana_ORM->add('method', '2')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Request->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:1567
2013-11-24 18:36:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: method ~ MODPATH/orm/classes/Kohana/ORM.php [ 1567 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:1567
2013-11-24 18:36:09 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Manyahin...', 1567, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Request.php(80): Kohana_ORM->add('method', '2')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Request->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:1567
2013-11-24 18:40:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: method ~ MODPATH/orm/classes/Kohana/ORM.php [ 1567 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:1567
2013-11-24 18:40:16 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Manyahin...', 1567, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Request.php(80): Kohana_ORM->add('method', '2')
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Request->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:1567
2013-11-24 18:41:04 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'p2p.request_method' doesn't exist [ INSERT INTO `request_method` (`request_id`, `method_id`) VALUES (NULL, '2') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/database/classes/Kohana/Database/Query.php:251
2013-11-24 18:41:04 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `re...', false, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Request.php(80): Kohana_ORM->add('methods', '2')
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Request->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/database/classes/Kohana/Database/Query.php:251
2013-11-24 18:42:07 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'request_id' cannot be null [ INSERT INTO `request_method` (`request_id`, `method_id`) VALUES (NULL, '2') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/database/classes/Kohana/Database/Query.php:251
2013-11-24 18:42:07 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `re...', false, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Request.php(80): Kohana_ORM->add('methods', '2')
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Request->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/database/classes/Kohana/Database/Query.php:251
2013-11-24 18:42:54 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'request_id' cannot be null [ INSERT INTO `request_method` (`request_id`, `method_id`) VALUES (NULL, '2') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/database/classes/Kohana/Database/Query.php:251
2013-11-24 18:42:54 --- DEBUG: #0 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `re...', false, Array)
#1 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/application/classes/Controller/Request.php(80): Kohana_ORM->add('methods', '2')
#3 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Request->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#6 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Manyahin/Dropbox/_projects/p2pexchange/www/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Manyahin/Dropbox/_projects/p2pexchange/www/modules/database/classes/Kohana/Database/Query.php:251
2013-11-24 18:51:28 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Request.php [ 85 ] in file:line
2013-11-24 18:51:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line