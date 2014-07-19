<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-19 10:26:39 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Cookie.php:67
2014-07-19 10:26:39 --- DEBUG: #0 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('laravel_session', NULL)
#1 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('laravel_session')
#2 C:\xampp\htdocs\kohana\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Cookie.php:67
2014-07-19 10:28:20 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Cookie.php:67
2014-07-19 10:28:20 --- DEBUG: #0 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('laravel_session', NULL)
#1 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('laravel_session')
#2 C:\xampp\htdocs\kohana\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Cookie.php:67
2014-07-19 11:17:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$value' (T_VARIABLE), expecting '(' ~ APPPATH\classes\Controller\Welcome.php [ 10 ] in file:line
2014-07-19 11:17:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-19 11:17:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$value' (T_VARIABLE), expecting '(' ~ APPPATH\classes\Controller\Welcome.php [ 10 ] in file:line
2014-07-19 11:17:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-19 11:42:12 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\Blog.php [ 7 ] in file:line
2014-07-19 11:42:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-19 11:44:01 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\Blog.php [ 7 ] in file:line
2014-07-19 11:44:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-19 11:44:45 --- CRITICAL: ErrorException [ 1 ]: Class 'Database' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 320 ] in file:line
2014-07-19 11:44:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-19 11:44:46 --- CRITICAL: ErrorException [ 1 ]: Class 'Database' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 320 ] in file:line
2014-07-19 11:44:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-19 11:44:56 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\kohana\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-19 11:44:56 --- DEBUG: #0 C:\xampp\htdocs\kohana\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\kohana\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('posts')
#3 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\xampp\htdocs\kohana\kohana\application\classes\Controller\Blog.php(7): Kohana_ORM::factory('Post')
#8 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#11 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-19 11:45:31 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\kohana\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-19 11:45:31 --- DEBUG: #0 C:\xampp\htdocs\kohana\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\kohana\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('posts')
#3 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\xampp\htdocs\kohana\kohana\application\classes\Controller\Blog.php(7): Kohana_ORM::factory('Post')
#8 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#11 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-19 11:45:40 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\kohana\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-19 11:45:40 --- DEBUG: #0 C:\xampp\htdocs\kohana\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\kohana\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('posts')
#3 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\xampp\htdocs\kohana\kohana\application\classes\Controller\Blog.php(7): Kohana_ORM::factory('Post')
#8 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#11 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-19 11:45:41 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\kohana\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-19 11:45:41 --- DEBUG: #0 C:\xampp\htdocs\kohana\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\kohana\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('posts')
#3 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\xampp\htdocs\kohana\kohana\application\classes\Controller\Blog.php(7): Kohana_ORM::factory('Post')
#8 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#11 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-19 11:46:09 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_kohana_posts' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-19 11:46:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-19 11:48:25 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\kohana\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-19 11:48:25 --- DEBUG: #0 C:\xampp\htdocs\kohana\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\kohana\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('posts')
#3 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\xampp\htdocs\kohana\kohana\application\classes\Controller\Blog.php(7): Kohana_ORM::factory('Post')
#8 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#11 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-19 11:50:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\Post.php [ 3 ] in file:line
2014-07-19 11:50:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-19 11:54:01 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\kohana\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-19 11:54:01 --- DEBUG: #0 C:\xampp\htdocs\kohana\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\kohana\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('posts')
#3 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\xampp\htdocs\kohana\kohana\application\classes\Controller\Blog.php(7): Kohana_ORM::factory('Post')
#8 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#11 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-19 11:59:57 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\kohana\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-19 11:59:57 --- DEBUG: #0 C:\xampp\htdocs\kohana\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\kohana\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('posts')
#3 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\xampp\htdocs\kohana\kohana\application\classes\Controller\Blog.php(7): Kohana_ORM::factory('Post')
#8 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#11 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-19 12:04:12 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-19 12:04:12 --- DEBUG: #0 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('posts')
#1 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#5 C:\xampp\htdocs\kohana\kohana\application\classes\Controller\Blog.php(7): Kohana_ORM::factory('Post')
#6 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-19 12:04:13 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-19 12:04:13 --- DEBUG: #0 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('posts')
#1 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#5 C:\xampp\htdocs\kohana\kohana\application\classes\Controller\Blog.php(7): Kohana_ORM::factory('Post')
#6 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-19 12:08:44 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_Result_Cached::$author ~ APPPATH\classes\Controller\Blog.php [ 9 ] in C:\xampp\htdocs\kohana\kohana\application\classes\Controller\Blog.php:9
2014-07-19 12:08:44 --- DEBUG: #0 C:\xampp\htdocs\kohana\kohana\application\classes\Controller\Blog.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 9, Array)
#1 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\kohana\application\classes\Controller\Blog.php:9
2014-07-19 12:11:44 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_blog' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-19 12:11:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-19 12:11:52 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-19 12:11:52 --- DEBUG: #0 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('posts')
#1 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#5 C:\xampp\htdocs\kohana\kohana\application\classes\Controller\Blog.php(8): Kohana_ORM::factory('Post')
#6 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-19 12:13:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\classes\Controller\Blog.php [ 9 ] in C:\xampp\htdocs\kohana\kohana\application\classes\Controller\Blog.php:9
2014-07-19 12:13:44 --- DEBUG: #0 C:\xampp\htdocs\kohana\kohana\application\classes\Controller\Blog.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 9, Array)
#1 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\kohana\application\classes\Controller\Blog.php:9
2014-07-19 12:13:51 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_Result_Cached::$body ~ APPPATH\classes\Controller\Blog.php [ 9 ] in C:\xampp\htdocs\kohana\kohana\application\classes\Controller\Blog.php:9
2014-07-19 12:13:51 --- DEBUG: #0 C:\xampp\htdocs\kohana\kohana\application\classes\Controller\Blog.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 9, Array)
#1 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\kohana\application\classes\Controller\Blog.php:9
2014-07-19 12:26:22 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Blog.php [ 9 ] in C:\xampp\htdocs\kohana\kohana\application\classes\Controller\Blog.php:9
2014-07-19 12:26:22 --- DEBUG: #0 C:\xampp\htdocs\kohana\kohana\application\classes\Controller\Blog.php(9): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\xampp\\htdocs...', 9, Array)
#1 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\kohana\application\classes\Controller\Blog.php:9