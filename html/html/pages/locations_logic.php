<?php
session_start();
include 'conn.php';

$mensen = $_POST["mensen"];
$vervoer = $_POST["vervoer"];
$stad = $_POST["stad"];
$land = $_POST["land"];

$stmt = $connection->prepare("INSERT INTO locations (mensen, vervoer, stad, land) VALUES(:mensen, :vervoer, :stad, :land)");
$stmt->bindParam(":mensen", $mensen);
$stmt->bindParam(":vervoer", $vervoer);
$stmt->bindParam(":stad", $stad);
$stmt->bindParam(":land", $land);
$stmt->execute();



header('Location: dashboard.php');
?>
