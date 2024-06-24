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
    echo $row['vertrek_punt'] ."<br />\n";
    echo '<div class="lower-body-extra-bookings">';
    echo '<div class="name-bar">';
    echo $row['land'] ."<br />\n";
    echo '</a>';
    echo '</div>';
    echo '</div>';
            }
    ?>
</body>
</html>