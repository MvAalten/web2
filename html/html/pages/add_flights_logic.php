<?php
session_start();
include 'conn.php';

$name = $_POST["name"];
$vertrek_punt = $_POST["vertrek_punt"];
$aankomst_punt = $_POST['aankomst_punt'];

$stmt = $connection->prepare("INSERT INTO flights (name, vertrek_punt, aankomst_punt) VALUES(:name, :vertrek, :aankomst)");
$stmt->bindParam(":name", $name);
$stmt->bindParam(":vertrek", $vertrek_punt);
$stmt->bindParam(":aankomst", $aankomst_punt);
$stmt->execute();



header('Location: dashboard.php');
?>