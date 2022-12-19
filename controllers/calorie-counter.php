<?php

$config = require 'config.php';

$db = new Database($config['database']);

$heading = "Calorie-Counter";

$foodItems = $db->query('select * from meals where user_id = 1')->findAll();

require "views/calorie-counter.view.php";
