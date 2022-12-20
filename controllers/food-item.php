<?php

$config = require 'config.php';

$db = new Database($config['database']);

$heading = "More information";
$currentUserId = 1;

$foodItem = $db->query('select * from meals where id = :id', [
    'id' => $_GET['id']
])->find();

if (!$foodItem) {
    abort();
}

authorize($foodItem['user_id'] === $currentUserId);


require "views/food-item.view.php";
