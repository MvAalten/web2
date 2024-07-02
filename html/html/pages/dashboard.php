<?php
session_start();
include 'conn.php';

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
    // If not logged in, redirect to the login page
}

try {
    $query = "SELECT * FROM users";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    die("Query failed: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="balk">
            <img src="/assets/logo.png" alt="Logo" class="logo-dashboard-admin">
            <a class="admin-dashboard-header-text">Admin Dashboard</a>
        </div>
    </header>
    <main class="dashboard-admin">
        <div class="container">
            <table>
                <thead>
                    <tr class="tr-admin">
                        <th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>Usertype</th>
                        <th>Update</th>
                        <th>Delete</th>
                        
                    </tr>
                </thead>
                <tbody class="tbody-admin">
                    <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($user['id']); ?></td>
                        <td><?php echo htmlspecialchars($user['username']); ?></td>
                        <td><?php echo htmlspecialchars($user['password']); ?></td>
                        <td><?php echo htmlspecialchars($user['email']); ?></td>
                        <td><?php echo htmlspecialchars($user['usertype']); ?></td>
                        <td><a href="update_logic.php?id=<?php echo htmlspecialchars($user['id']); ?>">Update</a></td>
                        <td><a href="delete_logic.php?id=<?php echo htmlspecialchars($user['id']); ?>">Delete</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>
