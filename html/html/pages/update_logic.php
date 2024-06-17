<?php
include 'conn.php';

$data = [
    'exerciseName' => $_POST['exerciseName'],
    'muscle' => $_POST['muscle'],
    'id' => $_POST['id']
];
$sql = "UPDATE exercises SET exerciseName=:exerciseName, muscle=:muscle where id=:id";
$stmt= $connection->prepare($sql);
$stmt->execute($data);
header('Location: dashboard.php');
?>