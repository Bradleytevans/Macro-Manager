<?php

$config = require 'config.php';

$db = new Database($config['database']);

$heading = "Calorie-Counter";

$foodItems = $db->query('select * from meals where user_id = 1')->findAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db->query('INSERT INTO meals (brand, food_item, calories, user_id) VALUES
    (:brand, :food_item, :calories, :user_id);', [
        'brand' => $_POST['brand'],
        'food_item' => $_POST['food_item'],
        'calories' => $_POST['calories'],
        'user_id' => 1 
    ]);
}


require "views/calorie-counter.view.php";
