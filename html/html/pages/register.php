<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
        <title>register</title>
        <link rel="stylesheet" href="../css/main.css">
    </head>
    <body>
        <?php
            include('../includes/nav.php')
        ?>
        <div class="login">
            <div class="login-container">
            <div class="login-form">
                        <form class="form-extra" action='register_logic.php' name='register_logic' method="post">
                        <label class="coloring"> Username: </label>  
                        <input class="username-log" type="text" name="username" placeholder="Username" required>
                        <label class="coloring"> Password: </label>  
                        <input class="password-log" type="password" name="password" placeholder="Password" required>
                        <label class="coloring"> email: </label>  
                        <input class="type-log-workout2" type="email" name="email" placeholder="email" required>
                        <input class="button-log" type="submit" value="Register">
                    </div>
            </div>
        </div>
    </body>
</html>