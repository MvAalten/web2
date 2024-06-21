<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
    // als je niet bent ingelogd dan word je verwezen naar de login page
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="../css/user_dashboard.css">
</head>
<body>
<?php
        include('../includes/nav.php')
    ?>
</body>
</html>


