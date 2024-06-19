<!-- work in progress -->


<?php
require 'conn.php';

// Get the user ID from the query string and sanitize it
$userId = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($userId > 0) {
    // Use a prepared statement to prevent SQL injection
    $sql = "SELECT id, username, usertype FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$userId]);

    // Fetch the results
    $result = $stmt->fetchAll();
} else {
    $result = [];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Check if the result is not empty
    if (!empty($result)) {
        // Output the username (replace with appropriate column name if needed)
        echo htmlspecialchars($result[0]['username']);
    } else {
        echo "No user found with ID: " . htmlspecialchars($userId);
    }
    ?>
</body>
</html>



<!-- 
<?php
require 'conn.php';
$userId = $_GET['id'];

$sql = "SELECT id, username, usertype FROM users WHERE users_id = $userId" ;

$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $result[0]['voornaam'];
    ?>
</body>
</html>


<?php
require 'conn.php';
$userId = $_GET['id'];

$sql = "SELECT id, username, usertype FROM users WHERE users_id = $userId" ;

$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $result[0]['voornaam'];
    ?>
</body>
</html> -->
