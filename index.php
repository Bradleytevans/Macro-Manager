<?php 
require 'functions.php';
require 'Database.php';
// require 'router.php';

$config = require 'config.php';

$db = new Database($config['database']);

$id = $_GET['id'];

$query = "select * from meals where id = :id";

$meals = $db->query($query, [':id' => $id])->fetchAll();

dd($meals);