<?php
session_start();
include 'conn.php';

if (empty($_POST['username']) || empty($_POST['password'])) {
    header("Location: register.php");
    exit();
}

$username = $_POST["username"];
$password = $_POST["password"];

$stmt = $connection->prepare("SELECT * FROM users WHERE username=:user AND password=:pass");
$stmt->execute(['user' => $username, 'pass' => $password]);
$user = $stmt->fetch();

if (!empty($user)) {
    $_SESSION["user"] = $username;

    // Controleer de usertype en stuur door naar de juiste dashboard
    if ($user["usertype"] == "user") {
        $_SESSION['usertype'] = 'user';
        header("Location: dashboarduser.php");
        
        exit();
    } elseif ($user["usertype"] == "admin") {
        $_SESSION['usertype'] = 'admin';
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Onbekende gebruikersrol.";
        exit();
    }
} else {
    header("Location: over_ons.php");
    exit();
}
?>
