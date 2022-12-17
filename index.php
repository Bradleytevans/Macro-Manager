<?php 
require 'functions.php';
require 'Database.php';
require 'router.php';

$db = new Database();
$meals = $db->query("select * from meals")->fetchAll(PDO::FETCH_ASSOC);
