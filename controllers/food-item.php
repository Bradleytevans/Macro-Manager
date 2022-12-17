<?php 

$config = require 'config.php';

$db = new Database($config['database']);

$heading = "More information";

$foodItem = $db->query('select * from meals where id = :id', ['id' => $_GET['id']])->fetch();

require "views/food-item.view.php";