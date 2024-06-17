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
    <?php include('includes/nav.php'); ?>

    <main>
        <div class="container-user-dashboard">
            <div class="container-text-header">
                <div class="text-header-user-dashboard">User Dashboard</div>
            </div>
        </div>

        <div class="top-part-container-index">
            <div class="top-part-left">
                <div class="text-ideale-vakantie">Find your ideal vacation!</div>
                <button class="zoeken-index"><a class="zoek-button-text">Zoeken!</a></button>
            </div>
            <div class="top-part-right">
                <div class="top-part-right-text-above-image">Take that break take that vacation!</div>
                <img src="\assets\halfiphone.png" class="top-part-right-image">
            </div>
        </div>

        <div class="middle-banner">
            <a class="text-middle-banner">Find your ideal vacation!</a>
        </div>

        <div class="container-under-part-pressable-boxes">
            <div class="box-index">
                <img class="image-homepage" src="\assets\image1homepage.png">
                <div class="underbox">
                    <a class="text-image-box-under">All Inclusive Vacations</a>
                </div>
            </div>
            <div class="box-index">
                <img class="image-homepage" src="\assets\image2homepage.png">
                <div class="underbox">
                    <a class="text-image-box-under">Travel by Plane</a>
                </div>
            </div>
            <div class="box-index">
                <img class="image-homepage" src="\assets\image3homepage.png">
                <div class="underbox">
                    <a class="text-image-box-under">Camping Vacations</a>
                </div>
            </div>
        </div>

    </main>
</body>
</html>


