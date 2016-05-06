<?php

require_once "vendor/autoload.php";

use Phroute\Phroute\RouteCollector;
use Illuminate\Database\Capsule\Manager as Capsule;  

// Database Layer
$capsule = new Capsule; 

$capsule->addConnection(array(
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'api',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => ''
));

$capsule->bootEloquent();

// Routing Layer
$router = new RouteCollector();

$router->get('/', ['Api\Platform', 'getIndex']);