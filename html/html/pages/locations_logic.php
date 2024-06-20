<?php
session_start();
include 'conn.php';

$mensen = $_POST["mensen"];
$vervoer = $_POST['vervoer'];

$stmt = $connection->prepare("INSERT INTO locations (mensen, vervoer) VALUES(:mensen, :vervoer)");
$stmt->bindParam(":mensen", $mensen);
$stmt->bindParam(":vervoer", $vervoer);
$stmt->execute();



header('Location: dashboard.php');
?>