<?php

$config = require 'config.php';

$db = new Database($config['database']);

$heading = "Calorie-Counter";

$foodItems = $db->query('select * from meals where user_id = 1')->findAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];

    if (strlen($_POST['brand']) === 0) {
        $errors['brand'] = 'A brand is required';
    }

    if (strlen($_POST['brand']) > 1000) {
        $errors['brand'] = 'The brand can not be more than 1,000 characters.';
    }


    if (strlen($_POST['food_item']) === 0) {
        $errors['food_item'] = 'A product is required';
    }

    if (strlen($_POST['food_item']) > 1000) {
        $errors['food_item'] = 'The product can not be more than 1,000 characters.';
    }

    if (strlen($_POST['calories']) === 0) {
        $errors['calories'] = 'Calories are required';
    }

    
    if (! is_numeric($_POST['calories'])) {
        $errors['calories'] = 'Please us numbers.';
    }


    // // ask Jason tomorrow
    if (empty($errors)) {

        $db->query('INSERT INTO meals (brand, food_item, calories, user_id) VALUES
            (:brand, :food_item, :calories, :user_id);', [
            'brand' => $_POST['brand'],
            'food_item' => $_POST['food_item'],
            'calories' => $_POST['calories'],
            'user_id' => 1
        ]);
    }
}


require "views/calorie-counter.view.php";
