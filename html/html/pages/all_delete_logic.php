<!-- user delete logic  -->
<?php
session_start();
include 'conn.php';


$id = $_POST["user_id"];


$stmt = $connection->prepare("DELETE FROM users WHERE id=:id");
$stmt->bindParam(":id", $id);
$stmt->execute();

header('Location: dashboard.php');
?>

<!-- flights delete logic -->
<?php
session_start();
include 'conn.php';


$id = $_POST["flights_id"];


$stmt = $connection->prepare("DELETE FROM flights WHERE id=:id");
$stmt->bindParam(":id", $id);
$stmt->execute();

header('Location: dashboard.php');
?>
<!-- locations delete logic  -->
<?php
session_start();
include 'conn.php';


$id = $_POST["locations"];


$stmt = $connection->prepare("DELETE FROM locations WHERE id=:id");
$stmt->bindParam(":id", $id);
$stmt->execute();

header('Location: dashboard.php');
?>