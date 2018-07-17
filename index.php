<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once('vendor/DreamTeam/Router.php');
include_once('app/App2.php');

use \DreamTeam\Router;
use \app\App2;



var_dump(App2::init()->getParams());