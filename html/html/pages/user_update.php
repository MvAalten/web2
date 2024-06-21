<?php
session_start();
include 'conn.php'; 
 
    $stmt = $connection->prepare("SELECT * FROM users WHERE id=:id");
    $stmt->execute(['id'=> $_GET['id']]);
    $exercises = $stmt->fetch();
        // Geef foutmelding weer als 'id' niet is
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action='product_update_logic.php' name='product_update_logic' method="POST">
    <input type="hidden" id="custId" name="id" value= "<?php echo $users['id']; ?>">

    <label>Update username: </label>
        <input type="text" name="muscle" value= "<?php echo $users['username']; ?>" required>
        <label>Update email: </label>
        <input type="text" name="exerciseName" value= "<?php echo $users['email']; ?>" required>
        <label>Update password: </label>
        <input type="text" name="exerciseName" value= "<?php echo $users['password']; ?>" required>
        <input type="submit" value="update product">
    </form>
</body>
</html>