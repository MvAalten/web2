<?php
$stmt = $connection->query("SELECT products.name, products_Info.kamers, products_Info.nachten
    FROM products
    INNER JOIN products_Info
    ON products.id=products_Info.id
    WHERE products.id = $userID");
    while ($row = $stmt->fetch()) {
        
    }

?>