<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-27 19:58:12 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Connection refused ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/database/classes/Kohana/Database/MySQL.php:171
2014-04-27 19:58:12 --- DEBUG: #0 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('requests')
#3 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/application/classes/Controller/Bid.php(7): Kohana_ORM::factory('request')
#8 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Controller.php(84): Controller_Bid->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Bid))
#11 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/Manyahin/Dropbox/_PROJECTS/p2pexchange/www/modules/database/classes/Kohana/Database/MySQL.php:171