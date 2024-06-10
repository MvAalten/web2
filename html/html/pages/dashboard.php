<?php
session_start();
if (!isset($_SESSION["user"])){
    header("Location: login.php");
    exit();
    // als je niet bent in gelogd dan word je verwezen naar de login page
}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>