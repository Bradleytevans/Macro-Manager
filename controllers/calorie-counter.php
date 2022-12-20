<?php

$config = require base_path('config.php');

$db = new Database($config['database']);

$foodItems = $db->query('select * from meals where user_id = 1')->findAll();

$errors = [];

require base_path('validation.php');

view("calorie-counter", [
    'heading' => 'Calorie Counter',
    'foodItems' => $foodItems,
    'errors' => $errors
]);
