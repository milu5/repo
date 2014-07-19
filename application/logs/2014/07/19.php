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