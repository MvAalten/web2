<?php
     include('conn.php')
?>

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
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    include('../includes/nav.php');
    ?>
    <!-- "SELECT * FROM users_data WHERE voornaam LIKE'%search%'"; -->
    <?php
    $stmt = $connection->query("SELECT * FROM locations");
    while ($row = $stmt->fetch()) {
echo '<section class="big-box">';
echo '    <div class="smaller-box" href="bookings_page.php?id=' . $row['id'] . '">';
echo '        <div class="left-smaller-box">'; 
echo  '<a href="bookings_page.php?id=' . $row['id'] . '">';
echo '          <div class="booking-data-container">';
echo '              <div class="booking-stad">';
echo                    $row['stad'] . "<br />\n";
echo '                  <p>Stad:</p>';
echo '              </div>';
echo '              <div class="booking-land">';
echo                    $row['land'] . "<br />\n";
echo '                  <p>Land:</p>';
echo '              </div>';
echo '              <div class="booking-mensen">';
echo                    $row['mensen'] . "<br />\n";
echo '                  <p>Hoeveelheid:</p>';
echo '              </div>';
echo '              <div class="booking-vervoer">';
echo                    $row['vervoer'] . "<br />\n";
echo '                  <p>Vervoer:</p>';
echo '              </div>';
echo '          </div>';
echo '        </div>';
echo '        <div class="right-smaller-box">';
echo '            <img class="booking-img" src="/assets/usable-img.jpg">';
echo '        </div>';
echo '    </div>';
echo '</section>';
    }
?>
    </body>
</html>