<?php
include 'conn.php';
$stmt = $connection->query("SELECT *
    FROM locations
    INNER JOIN locations
    ON locations.id=flights.id
    WHERE products.id = $userID");
    while ($row = $stmt->fetch()) {
        echo '<a class="container-reizen" href="product-info.php?id=' . $row['id'] . '">';
    }
?>