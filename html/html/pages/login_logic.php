<?php
session_start();
include 'conn.php';
if(empty($_POST['username']) || empty($_POST['password'])){
    header("Location: register.php");
    exit();
}

$username = $_POST["username"];
$password = $_POST["password"];

$stmt = $connection->prepare("SELECT * FROM users WHERE username=:user AND password=:pass");
$stmt->execute(['user' => $username, 'pass' => $password]);
$user = $stmt->fetch();


if (!empty($user)){
$_SESSION["user"] = $username;
    header ("Location: dashboard.php");
    } 
    else{
        header("Location: over_ons.php");
    }

?>