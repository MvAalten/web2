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
    <section class="big-box">
            <?php
        $stmt = $connection->query("SELECT * FROM locations");
        while ($row = $stmt->fetch()) {
        echo    '<section class="form-section">';
        echo  $row['stad'] ."<br />\n";
        echo  $row['land'] ."<br />\n";
        echo  $row['mensen'] ."<br />\n";
        echo  $row['vervoer'] ."<br />\n";
        echo '</section>';
     }
        ?>
    </section>
    </body>
</html>