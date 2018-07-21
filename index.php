<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';

//include_once('vendor/DreamTeam/Router.php');
//include_once('app/App2.php');

use \DreamTeam\Router;
use \app\App2;


App2::hel();
//var_dump(Router::init()->getParams());