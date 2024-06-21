<?php
include 'conn.php';

$data = [
    'username' => $_POST['username'],
    'password' => $_POST['password'],
    'email' => $_POST['email'],
    'usertype' => $_POST['usertype'],
];
$sql = "UPDATE users SET username=:username, password=:password, email=:email, usertype=:usertype where id=:id";
$stmt= $connection->prepare($sql);
$stmt->execute($data);
header('Location: dashboard.php');
?>