<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!Validator::string($_POST['brand'], 1, 1000)) {
        $errors['brand'] = 'A brand is required';
    }
    
    if (!Validator::string($_POST['food_item'], 1, 1000)) {
        $errors['food_item'] = 'A brand is required';
    }
    
    if (!Validator::string($_POST['calories'], 1, 1000)) {
        $errors['calories'] = 'A brand is required';
    }
    
    if (!Validator::integer($_POST['calories'])) {
        $errors['calories'] = 'Please us numbers.';
    }
    
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