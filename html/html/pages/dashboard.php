<?php
session_start();
if (!isset($_SESSION["user"])){
    header("Location: login.php");
    exit();
    // als je niet bent in gelogd dan word je verwezen naar de login page
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin dashboard</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
</head>
<body>
<<<<<<< Updated upstream
    <div class="container">

    </div>
=======
<?php
        include('../includes/nav.php')
    ?>
    <main>
        <form class="form-extra" action='login_logic.php' name='login' method="POST">
            <label> <p>Gebruikersnaam:</p></label>
            <input type="text" name="username" placeholder="gebruikersnaam" required class="username-log">
            <label><p>Wachtwoord:</p></label>
            <input type="password" name="password" placeholder="wachtwoord" required class="password-log">
            <input type="submit" value="Login" class="button-log">  
        </form>
    </main>
>>>>>>> Stashed changes
</body>
</html>

<!-- SELECT value_to_be_shown, value_to_be_shown, value_to_be_shown, value_to_be_shown
FROM tabel_name INNER JOIN tabel_name
ON tabel_name.id = tabel_name.id; -->