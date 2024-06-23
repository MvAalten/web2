<?php
session_start();
include 'conn.php';

$review = $_POST["review"];
$name = $_POST["name"];

$stmt = $connection->prepare("INSERT INTO reviews (review, name) VALUES(:review, :name)");
$stmt->bindParam(":review", $review);
$stmt->bindParam(":name", $name);
$stmt->execute();



header('Location: review.php');
?>  
