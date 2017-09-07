<?php

require_once "vendor/autoload.php";

use Phroute\Phroute\RouteCollector;
use Illuminate\Database\Capsule\Manager as Capsule;  

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

// Database Layer
$capsule = new Capsule; 

$capsule->addConnection(array(
    'driver'    => 'mysql',
    'host'      => env('DB_HOST', 'localhost'),
    'database'  => env('DB_NAME', 'api'),
    'username'  => env('DB_USER', 'ubuntu'),
    'password'  => env('DB_PASS', ''),
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => ''
));

$capsule->bootEloquent();

// Routing Layer
$router = new RouteCollector();

$router->get('/', ['Api\Platform', 'getIndex']);