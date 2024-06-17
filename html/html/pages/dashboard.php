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
    </main>
</body>
</html>

<!-- SELECT value_to_be_shown, value_to_be_shown, value_to_be_shown, value_to_be_shown
FROM tabel_name INNER JOIN tabel_name
ON tabel_name.id = tabel_name.id; -->