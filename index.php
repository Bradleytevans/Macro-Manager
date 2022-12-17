<?php 
require 'functions.php';
require 'Database.php';
// require 'router.php';

$config = require 'config.php';

$db = new Database($config['database']);
$meals = $db->query("select * from meals")->fetchAll();

dd($meals);