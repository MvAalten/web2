<?php
session_start();
include 'conn.php';


$id = $_POST["user_id"];


$stmt = $connection->prepare("DELETE FROM users WHERE id=:id");
$stmt->bindParam(":id", $id);
$stmt->execute();

header('Location: dashboard.php');
?>
<?php
session_start();
include 'conn.php';


$id = $_POST["user_id"];


$stmt = $connection->prepare("DELETE FROM users WHERE id=:id");
$stmt->bindParam(":id", $id);
$stmt->execute();

header('Location: dashboard.php');
?>