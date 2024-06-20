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
</head>
<body>
    <!-- "SELECT * FROM users_data WHERE voornaam LIKE'%search%'"; -->
    <?php
     include('../includes/nav.php')
    ?>
    <div class="login">
            <div class="login-container">
            <div class="login-form">
                        <form class="" action='' name='' method="post">
                        <label class="coloring">Name:</label>  
                        <input class="username-log" type="text" name="name" placeholder="Username" required>
                        <label class="coloring"> E-Mail:</label>  
                        <input class="password-log" type="email" name="email" placeholder="email" required>
                        <label class="coloring"> Feedback:</label>  
                        <input class="type-log-workout2" type="text" name="message" placeholder="message" required>
                        <input class="button-log" type="submit" value="Submit">
                    </div>
            </div>
        </div>
</body>
</html>