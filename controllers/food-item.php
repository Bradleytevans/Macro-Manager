<?php

$config = require base_path('config.php');

$db = new Database($config['database']);

$currentUserId = 1;

$foodItem = $db->query('select * from meals where id = :id', [
    'id' => $_GET['id']
])->find();

if (!$foodItem) {
    abort();
}

authorize($foodItem['user_id'] === $currentUserId);

view("food-item", [
    'heading' => 'Item Information',
    'foodItem' => $foodItem
]);