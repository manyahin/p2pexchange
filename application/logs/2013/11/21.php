<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-21 14:47:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: json_cash_currencies ~ APPPATH/views/Request/create.php [ 94 ] in /Users/Manyahin/p2pexchange/application/views/Request/create.php:94
2013-11-21 14:47:20 --- DEBUG: #0 /Users/Manyahin/p2pexchange/application/views/Request/create.php(94): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 94, Array)
#1 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#2 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#3 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Manyahin/p2pexchange/application/views/site.php(45): Kohana_View->__toString()
#5 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#6 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#7 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#11 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/Manyahin/p2pexchange/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/Manyahin/p2pexchange/application/views/Request/create.php:94
2013-11-21 14:47:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: json_cash_currencies ~ APPPATH/views/Request/create.php [ 104 ] in /Users/Manyahin/p2pexchange/application/views/Request/create.php:104
2013-11-21 14:47:38 --- DEBUG: #0 /Users/Manyahin/p2pexchange/application/views/Request/create.php(104): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Manyahin...', 104, Array)
#1 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#2 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#3 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Manyahin/p2pexchange/application/views/site.php(45): Kohana_View->__toString()
#5 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(61): include('/Users/Manyahin...')
#6 /Users/Manyahin/p2pexchange/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Manyahin...', Array)
#7 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Manyahin/p2pexchange/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Request))
#11 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/Manyahin/p2pexchange/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/Manyahin/p2pexchange/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/Manyahin/p2pexchange/application/views/Request/create.php:104