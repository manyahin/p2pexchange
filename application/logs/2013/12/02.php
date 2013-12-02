<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-02 10:46:24 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_acceptor' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-12-02 10:46:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-02 10:46:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Acceptor' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-12-02 10:46:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-02 10:48:55 --- EMERGENCY: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:603
2013-12-02 10:48:55 --- DEBUG: #0 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('name')
#1 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/application/views/request/list.php(33): Kohana_ORM->__get('name')
#2 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#3 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#4 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/application/views/site.php(45): Kohana_View->__toString()
#6 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#7 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#8 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#12 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/orm/classes/Kohana/ORM.php:603
2013-12-02 10:52:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/site.php [ 45 ] in /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/application/views/site.php:45
2013-12-02 10:52:50 --- DEBUG: #0 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/application/views/site.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 45, Array)
#1 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#2 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#3 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#7 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/application/views/site.php:45
2013-12-02 11:06:26 --- EMERGENCY: Database_Exception [ 1103 ]: Incorrect table name '' [ INSERT INTO `` (`request_id`, `acceptor_id`) VALUES ('15', '15'), ('15', '4'), ('15', NOW()) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/database/classes/Kohana/Database/Query.php:251
2013-12-02 11:06:26 --- DEBUG: #0 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `` ...', false, Array)
#1 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/application/classes/Controller/Request.php(117): Kohana_ORM->add('acceptors', Array)
#3 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Request->action_accept()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#6 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/database/classes/Kohana/Database/Query.php:251
2013-12-02 11:27:29 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function count_all() on a non-object ~ APPPATH/classes/Controller/Request.php [ 118 ] in file:line
2013-12-02 11:27:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line