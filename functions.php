<?php 

function dd($value) {
    echo '<pre>';
die(var_dump($value));
echo '</pre>';
}

// ROUTER FUNCTIONS
function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}

function routeToController ($uri, $routes) {
    array_key_exists($uri, $routes) ? require $routes[$uri] : abort();
}

function abort($code = 404) {
   http_response_code();
   require "views/{$code}.php";
   die();
}
