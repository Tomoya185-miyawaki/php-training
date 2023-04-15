<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use App\Router\Route;

$route = new Route();
$route->getRoute($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);