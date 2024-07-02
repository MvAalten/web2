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
echo '<div class="big-box-lower-bookings-page">';
echo '    <div class="big-img-container">';
echo '        <img class="booking-img" src="/assets/usable-img.jpg">';
echo '    </div>';
echo '    <div class="big-line-land"></div>';
echo '    <div class="big-under-box">';
echo '        <div class="left-box-under-img">';
echo '            <p>uitgebrijde informatie:</p>';
echo '            <br>';
echo '            <br>';
echo '            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tempus, enim in placerat tempor, nibh enim aliquam arcu, at facilisis metus lacus et ex. Aliquam erat volutpat. Nullam vitae rutrum arcu, quis cursus libero. Nulla fermentum mollis ligula, pellentesque blandit ligula laoreet nec. Proin ac mi ac felis laoreet congue ac quis metus. Curabitur tellus sem, suscipit sed dolor vitae, sagittis rhoncus ligula. Praesent aliquam imperdiet dui, in suscipit nisi imperdiet dignissim. In pharetra felis quis dapibus rutrum. Quisque fringilla ultricies magna, ut convallis leo molestie eu. Donec elementum, orci imperdiet euismod frin</p>';
echo '        </div>';
echo '        <div class="right-box-under-img">';
echo '            <p>Basis informatie</p>';
echo '            <br>';
echo '            <br>';
echo '            <p>Stad:</p>';
echo '            ' . $row['stad'];
echo '            <p>Land:</p>';
echo '            ' . $row['land'];
echo '            <p>Hoeveelheid:</p>';
echo '            ' . $row['mensen'];
echo '            <p>Vervoer:</p>';
echo '            ' . $row['vervoer'];
echo '        </div>';
echo '    </div>';
echo '</div>';
}
?>
</body>
</html>
