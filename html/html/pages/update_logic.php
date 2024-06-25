<?php 

include("conn.php");

// Corrected SQL query syntax
$sql = "SELECT * FROM users WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":id", $_GET['id']);
$stmt->execute();
$result = $stmt->fetch();

if (isset($_POST['submit'])) {
    $sql = "UPDATE users SET username = :username, email = :email, password = :password WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id", $_GET['id']);
    $stmt->bindParam(":username", $_POST['username']); 
    $stmt->bindParam(":email", $_POST['email']);
    $stmt->bindParam(":password", $password);
    $stmt->execute();
    
    header('Location: dashboard.php');
    exit;
}
?>