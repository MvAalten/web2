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
        <?php
            include('../includes/nav.php')
        ?>
        <div class="login">
            <div class="login-container">
            <form class="form-extra" action='register_logic.php' name='login' method="POST">
                <label> <p>Gebruikersnaam:</p></label>
                <input type="text" name="gebruikersnaam" placeholder="Gebruikersnaam" required class="username-log">
                <label><p>E-mail:</p></label>
                <input type="text" name="email" placeholder="E-mail" required class="username-log">
                <label><p>Wachtwoord:</p></label>
                <input type="password" name="wachtwoord" placeholder="Wachtwoord" required class="password-log">
                <input type="submit" value="Register" class="button-log">  
            </form>
            </div>
        </div>
    </body>
</html>