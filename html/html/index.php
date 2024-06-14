<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- "SELECT * FROM users_data WHERE voornaam LIKE'%search%'"; -->
    <?php
        include('includes/nav.php')
    ?>
     <main>
        <div class="top-part-container-index">
            <div class="top-part-left">
                <div class="text-ideale-vakantie">Find your ideal vacation!</div>
                <button href="#" class="zoeken-index"><a class="zoek-button-text">Zoeken!</a></button>
            </div>
            <div class="top-part-right">
                <!-- hier moet een image en daarboven moet een text zie figma (home) -deniz -->
                <div class="top-part-right-text-above-image">Take that break take that vacation!</div>
                <img src="\assets\halfiphone.png" class="top-part-right-image">
            </div>
        </div>    
        <div class="middle-banner">
            <a class="text-middle-banner">Find your ideal vacation!</a>
        </div>
        <div class="container-under-part-pressable-boxes">
            <!-- images inside box index -->
            <div class="box-index"></div>
            <div class="underbox">
                <a>all inclusive vacations</a>
            </div>
            <div class="box-index"></div>
            <div class="underbox">
                <a>travel by plane</a>
            </div>
            <div class="box-index"></div>
            <div class="underbox">
                <a></a>
            </div>
        </div>
     </main>
</body>
</html>