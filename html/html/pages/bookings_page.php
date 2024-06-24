<?php
include ('conn.php');
$userID=$_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include('../includes/nav.php');
        $stmt = $connection->query("SELECT *
        FROM locations
        INNER JOIN flights
        ON locations.id=flights.flights_id 
    
        WHERE locations.id = $userID");
        while ($row = $stmt->fetch()) {
    echo '<div class="lower-body-extra-bookings">';
    echo '<div class="name-bar">';
    echo '<a class="text-country-and-city">land:';
    echo '</a>';
    echo '<div class="text-country-and-city">';
    echo $row['land'] ."<br />\n";
    echo '<br>';
    echo '</div>';
    echo '<a class="text-country-and-city">In deze plaats passen zo veel mensen:';
    echo '</a>';
    echo '<div class="text-country-and-city">';
    echo $row['mensen'] ."<br />\n";
    echo '<br>';
    echo '<a class="text-country-and-city">stad:';
    echo '</a>';
    echo '<div class="text-country-and-city">';
    echo $row['stad'] ."<br />\n";
    echo '</div>';
    echo '</div>';
    echo '</a>';
    echo '</div>';
    echo '<div class="name-bar">';
    echo '<a class="text-country-and-city">U vliegt met vliegtuigmaatschappij:';
    echo '</a>';
    echo '<div class="text-country-and-city">';
    echo $row['name'] ."<br />\n";
    echo '<br>';
    echo '</div>';
    echo '<a class="text-country-and-city">Land van vertrek';
    echo '</a>';
    echo '<div class="text-country-and-city">';
    echo $row['vertrek_punt'] ."<br />\n";
    echo '</div>';
    echo '<br>';
    echo '<a class="text-country-and-city">Land van aankomst';
    echo '</a>';
    echo '<div class="text-country-and-city">';
    echo $row['aankomst_punt'] ."<br />\n";
    echo '</div>';
    echo '</a>';
    echo '</div>';
    echo '</div>';
            }
    ?>
</body>
</html>