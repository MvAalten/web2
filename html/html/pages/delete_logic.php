<?php 
include("conn.php");

// Fetch user details based on the provided ID
if (isset($_GET['id'])) {
    $sql = "SELECT * FROM users WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id", $_GET['id'], PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$result) {
        die("User not found.");
    }
}

// Handle the form submission for updating user details
if (isset($_POST['btn-delete'])) {
    $sql = "UPDATE users SET username = :username, password = :password, email = :email WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id", $_GET['id'], PDO::PARAM_INT);
    $stmt->bindParam(":username", $_POST['username']);
    $stmt->bindParam(":password", $_POST['password']);  // Consider hashing the password
    $stmt->bindParam(":email", $_POST['email']);
    $stmt->execute();
    
    header('Location: dashboard.php');
    exit;
}
?>
