<?php 
require 'functions.php';
// require 'router.php';

$dsn = "mysql:host=localhost;port=3306;dbname=Macro-Manager;charset=utf8mb4;user=root";

$pdo = new PDO($dsn);

$statement = $pdo->prepare("select * from meals");

$statement->execute();

$meals = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($meals as $meal) {
    echo "<li>" . $meal['brand'] . " " . $meal['food_item'] . ":" . $meal['calories']. "  calories" . "</li>";
}