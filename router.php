<?php
$routes = require 'routes.php';

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

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

routeToController($uri, $routes);
