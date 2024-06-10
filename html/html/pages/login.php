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
        <!-- SQl code hier neergezet voor later gebruik -->
        <!-- !!!!BELANGRIJK!!!! -->
    <!-- "SELECT * FROM users_data WHERE voornaam LIKE'%search%'"; -->
    <?php
     include('../includes/nav.php')
    ?>
    <!-- hier begint de main -->
    <main>
        <div class="background-img-container"> 
            <div class="login">
                <div class="login-container">
                <form class="form-extra" action='login_logic.php' name='login' method="POST">
                    <label> <p>username:</p></label>
                    <input type="text" name="username" placeholder="username" required class="username-log">
                    <label><p>Wachtwoord:</p></label>
                    <input type="password" name="password" placeholder="Wachtwoord" required class="password-log">
                    <input type="submit" value="Login" class="button-log">  
                </form>
                </div>
            </div>
        </div>
    </main>
    </body>
</html>