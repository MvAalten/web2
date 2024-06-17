<?php
session_start();
include 'conn.php'; 
 
    $stmt = $connection->prepare("SELECT * FROM exercises WHERE id=:id");
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
    <link rel=" stylesheet" href="../css.main.css">
</head>
<body>
    <form action='product_update_logic.php' name='product_update_logic' method="POST">
    <input type="hidden" id="custId" name="id" value= "<?php echo $exercises['id']; ?>">

    <label>Targeted muscle: </label>
        <input type="text" name="muscle" value= "<?php echo $exercises['muscle']; ?>" required>
        <label>Naam van exercise: </label>
        <input type="text" name="exerciseName" value= "<?php echo $exercises['exerciseName']; ?>" required>
        <input type="submit" value="update product">
    </form>
</body>
</html>