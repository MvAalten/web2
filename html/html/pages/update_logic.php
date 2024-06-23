<?php 

include("conn.php");

/** 
@var PDO $pdo
*/ 

$sql = "SELECT FROM users WHERE ID = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":id", $_GET['id']);
$stmt->execute();
$result = $stmt->fetch();

if (isset($_POST['submit'])) {
    $sql = "UPDATE users SET username = :username, email = :email, password = :password WHERE ID = :id";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id", $_GET['id']);
    $stmt->bindParam(":username", $_POST['username']); 
    $stmt->bindParam(":email", $_POST['email']);
    $stmt->bindParam(":password", $_POST['password']);
    $stmt->execute();
    header('Location: admin.php');
    exit;
}


?>