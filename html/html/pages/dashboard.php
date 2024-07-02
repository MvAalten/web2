<?php
session_start();
include 'conn.php';
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
    <header>
        <div class="balk">
            <img src="\assets\logo.png" alt="" class="logo-dashboard-admin">
            <a class="admin-dashboard-header-text">Admin Dashboard</a>
        </div>
        
    </header>
    <main class="dashboard-admin">
        <div class="container-user-forms">
        <form class="form-column" action='update_logic.php' name='update_logic.php' method="POST">
        <h3>Delete account</h3>
        <input type="hidden" id="custId" name="id" >
        <input type="text" name="username" placeholder="username"required>
        <input type="text" name="password" placeholder="password" required>
        <input type="submit" value="Submit">
        </form>

        <form class="form-column" action='update_logic.php' name='update_logic.php' method="POST">
        <input type="hidden" id="custId" name="id" >
        <h3>Update account</h3>
        <input type="text" name="username" placeholder="username"required>
        <input type="text" name="password" placeholder="password" required>
        <input class="button-admin-dashboard" type="submit" value="Submit">
        </form>

        <form class="form-column" action='update_logic.php' name='update_logic.php' method="POST">
        <input type="hidden" id="custId" name="id" >
        <label>Username: </label>
        <input type="text" name="username" placeholder="username"required>
        <label>Password: </label>
        <input type="text" name="password" placeholder="password" required>
        <label>email: </label>
        <input type="text" name="email" placeholder="email" required>
        <label>user ID: </label>
        <input type="text" name="user_id" placeholder="user ID" required>
        <label>Usertype input admin or leave empty: </label>
        <input type="text" name="usertype" placeholder="admin">
        <input class="button-admin-dashboard" type="submit" value="Submit">
        </form>
        </div>    

        <div class="container-user-forms">
            
        <form class="form-column" action='update_logic.php' name='update_logic.php' method="POST">
        <input type="hidden" id="custId" name="id" >
        <label>Username: </label>
        <input type="text" name="username" placeholder="username"required>
        <label>Password: </label>
        <input type="text" name="password" placeholder="password" required>
        <label>email: </label>
        <input type="text" name="email" placeholder="email" required>
        <label>user ID: </label>
        <input type="text" name="user_id" placeholder="user ID" required>
        <label>Usertype input admin or leave empty: </label>
        <input type="text" name="usertype" placeholder="admin">
        <input class="button-admin-dashboard" type="submit" value="Submit">
        </form>

        <form class="form-column" action='update_logic.php' name='update_logic.php' method="POST">
        <input type="hidden" id="custId" name="id" >
        <label>Username: </label>
        <input type="text" name="username" placeholder="username"required>
        <label>Password: </label>
        <input type="text" name="password" placeholder="password" required>
        <label>email: </label>
        <input type="text" name="email" placeholder="email" required>
        <label>user ID: </label>
        <input type="text" name="user_id" placeholder="user ID" required>
        <label>Usertype input admin or leave empty: </label>
        <input type="text" name="usertype" placeholder="admin">
        <input class="button-admin-dashboard" type="submit" value="Submit">
        </form>

        <form class="form-column" action='update_logic.php' name='update_logic.php' method="POST">
        <input type="hidden" id="custId" name="id" >
        <label>Username: </label>
        <input type="text" name="username" placeholder="username"required>
        <label>Password: </label>
        <input type="text" name="password" placeholder="password" required>
        <label>email: </label>
        <input type="text" name="email" placeholder="email" required>
        <label>user ID: </label>
        <input type="text" name="user_id" placeholder="user ID" required>
        <label>Usertype input admin or leave empty: </label>
        <input type="text" name="usertype" placeholder="admin">
        <input class="button-admin-dashboard" type="submit" value="Submit">
        </form>
        </div>    


        <!-- <section class="stats">
            <div class="stat">
                <h2>Users</h2>

            </div>
            <div class="stat">
                <h2>Posts</h2>
                <p>300</p>
            </div>
            <div class="stat">
                <h2>Comments</h2>
                <p>1200</p>
            </div>
        </section> -->
        <!-- user update form
        add flights delete flights
        add accommodations delete accommodations -->
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <!-- <section class="form-section">
            <h2>Delete Form</h2>
            <form class="form-column"  action='all_delete_logic.php' name='all_delete_logic.php' method="post">
                    <label> all delete: </label>
                    <br>
                    <input type="text" name="user_id" placeholder="user id delete" required>
                    <input type="submit" value="Delete">
                    <input type="text" name="flights_id" placeholder="flights id delete" required>
                    <input type="submit" value="Delete">
                    <input type="text" name="accommodations_id" placeholder="accommodations id delete" required>
                    <input type="submit" value="Delete">
                 </form>
        </section>
        <section class="form-section">
            <h2>Add flights</h2>
            <form class="form-column" action='add_flights_logic.php' name='add_flights_logic.php' method="post">
                    <label> Add flights: </label>
                    <br>
                    <input type="text" name="name" placeholder="naam" required>
                    <input type="text" name="vertrek_punt" placeholder="vertrek punt" required>
                    <input type="text" name="aankomst_punt" placeholder="aankomst punt" requiredd>
                    <input type="submit" value="Upload">
                </form>
        </section>
        <section class="form-section">
            <h2>Add accommodations</h2>
            <form class="form-column" action='locations_logic.php' name='locations_logic.php' method="post">
                    <label> Add accommodations: </label>
                    <br>
                    <input class="people-amount" type="number" name="mensen" placeholder="1" required>
                    <input type="text" name="vervoer" placeholder="vervoer" required>
                    <input type="text" name="stad" placeholder="stad" required>
                    <input type="text" name="land" placeholder="land" required>
                    <input type="submit" value="Upload">
                </form>
        </section>
                <section class="form-section">
            <h2>User update form</h2>
            <form action='update_logic.php' name='update_logic.php' method="POST">
    <input type="hidden" id="custId" name="id">


        </section> -->
    <!-- </main> -->
</body>
</html>

<!-- SELECT value_to_be_shown, value_to_be_shown, value_to_be_shown, value_to_be_shown
FROM tabel_name INNER JOIN tabel_name
ON tabel_name.id = tabel_name.id; -->