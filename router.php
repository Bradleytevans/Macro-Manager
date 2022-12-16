<?php 

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/calorie-counter' => 'controllers/calorie-counter.php',
    '/food-information' => 'controllers/food-information.php',
];

routeToController($uri, $routes);