<?php 

$config = require 'config.php';

$db = new Database($config['database']);

$heading = "More information";
$currentUserId = 1;

$foodItem = $db->query('select * from meals where id = :id', [
    'id' => $_GET['id']
    ])->fetch();

if (! $foodItem) {
    abort(Response::NOT_FOUND);
}

if ($foodItem['user_id'] != $currentUserId) {
    abort(Response::FORBIDDEN);
}
require "views/food-item.view.php";