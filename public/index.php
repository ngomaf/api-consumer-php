<?php

error_reporting(E_ALL);
ini_set("display_errors", 1); // 1

use Ngomafortuna\RouteSystemSimple\Route;

define("PATH", dirname(__FILE__, 2));
define("URL", $_SERVER['HTTP_HOST']);
define("VIEWS", PATH . '/resources/views'); 
define("MAINDIR", PATH . '/src'); 
define("MAINAME", 'source');

require_once PATH . '/vendor/autoload.php';

(new Route)->index();