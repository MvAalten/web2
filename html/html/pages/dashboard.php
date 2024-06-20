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
<?php
        include('../includes/nav.php')
    ?>
    <main class="dashboard">
        <h1>Welcome to the Admin Dashboard</h1>
        <section class="stats">
            <div class="stat">
                <h2>Users</h2>
                <p>150</p>
            </div>
            <div class="stat">
                <h2>Posts</h2>
                <p>300</p>
            </div>
            <div class="stat">
                <h2>Comments</h2>
                <p>1200</p>
            </div>
        </section>
        <section class="form-section">
            <h2>Update Form</h2>
            <form action='user_delete_logic.php' name='user_delete_logic.php' method="post">
                    <label> User delete: </label>
                    <br>
                    <input type="text" name="user_id" placeholder="id delete" required>
                    <input type="submit" value="Delete">
                 </form>
        </section>
        <section class="form-section">
            <h2>Add flights</h2>
            <form class="form-flights" action='add_flights_logic.php' name='add_flights_logic.php' method="post">
                    <label> Add flights: </label>
                    <br>
                    <input type="text" name="name" placeholder="naam" required>
                    <input type="text" name="vertrek_punt" placeholder="vertrek punt" required>
                    <input type="text" name="aankomst_punt" placeholder="aankomst punt" requiredd>
                    <input type="submit" value="Register">

                 </form>
<!-- 
                 <div class="login-form">
                        <form class="form-extra" action='register_logic.php' name='register_logic' method="post">
                        <label class="coloring"> Username: </label>  
                        <input class="username-log" type="text" name="username" placeholder="Username" required>
                        <label class="coloring"> Password: </label>  
                        <input class="password-log" type="password" name="password" placeholder="Password" required>
                        <label class="coloring"> email: </label>  
                        <input class="type-log-workout2" type="email" name="email" placeholder="email" required>
                        <input class="button-log" type="submit" value="Register">
                    </div> -->
        </section>
    </main>
</body>
</html>

<!-- SELECT value_to_be_shown, value_to_be_shown, value_to_be_shown, value_to_be_shown
FROM tabel_name INNER JOIN tabel_name
ON tabel_name.id = tabel_name.id; -->