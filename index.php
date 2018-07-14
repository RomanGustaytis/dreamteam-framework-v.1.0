<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once('vendor/DreamTeam/Router.php');

use \DreamTeam\Router;

var_dump(Router::init()->getParams());