<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/calorie-counter' => 'controllers/calorie-counter.php',
    '/food-item' => 'controllers/food-item.php',
    '/food-information' => 'controllers/food-information.php',
];

function routeToController($uri, $routes)
{
    array_key_exists($uri, $routes) ? require $routes[$uri] : abort(Response::NOT_FOUND);
}

function abort($code = 404)
{
    http_response_code();
    require "views/{$code}.php";
    die();
}


routeToController($uri, $routes);
