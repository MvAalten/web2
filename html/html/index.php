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
    <div id="cookie-consent-banner" class="cookie-banner">
        <p>Wij gebruiken cookies om uw ervaring te verbeteren. Door onze site te gebruiken, gaat u akkoord met ons gebruik van cookies. <a href="pages/cookie.php">Leer meer</a>.</p>
        <div id="cookie-consent-banner">
        </div>
        <button onclick="myFunction()">Accept</button>
    </div>
    <script src="/pages/cookie.jsx"></script>
     <main>
     <div class="searchbar-phone-container">
                
                    <input type="text" id="myInput" onkeyup="searchBar()" placeholder="Zoek naar landen..">
                    <ul id="placeName">
                    <li><a href="/pages/bookings.php">Spanje</a></li>
                    <li><a href="/pages/bookings.php">Kroatie</a></li>

                    <li><a href="/pages/bookings.php">Argentinie</a></li>
                    <li><a href="/pages/bookings.php">Brazilie</a></li>

                    <li><a href="/pages/bookings.php">Japan</a></li>
                    <li><a href="/pages/bookings.php">Indonesie</a></li>
                    <li><a href="/pages/bookings.php">China</a></li>
                    </ul>
                    <script src="pages/search_bar.jsx"></script>

                    <div class="top-part-left">
        <div class="top-part-container-index">
                    <div class="top-part-right">
                    <!-- hier moet een image en daarboven moet een text zie figma (home) -deniz -->
                    <div class="top-part-right-text-above-image">Neem die pauze, neem die vakantie!</div>
                    <img src="\assets\halfiphone.png" class="top-part-right-image">
                </div>
            </div>
        </div>    
        <div class="middle-banner">
            <a class="text-middle-banner">Vind jouw ideale vakantie!</a>
        </div>
        <div class="container-under-part-pressable-boxes">
            <!-- images inside box index -->
            <div class="box-index">
                    <img class="image-homepage" src="\assets\image1homepage.png">
                <div class="underbox">
                    <a href="../pages/bookings.php" class="text-image-box-under">All-inclusive vakanties!</a>
                </div>
            </div>
            <div class="box-index">
                    <img href class="image-homepage" src="\assets\image2homepage.png">
                <div class="underbox">
                    <a href="../pages/bookings.php" class="text-image-box-under">Reis met de vliegtuig</a>
                </div>
            </div>
            <div class="box-index">
                    <img class="image-homepage" src="\assets\image3homepage.png">
                <div class="underbox">
                    <a href="../pages/bookings.php" class="text-image-box-under">Kampeer vakanties</a>
                </div>
            </div>
        </div>
     </main>
</body>
</html>