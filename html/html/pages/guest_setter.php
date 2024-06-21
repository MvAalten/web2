<?php 
require 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
<button onclick="setAmountOfGuests()">add guests</button>

<form action='register_persoon.php' method="POST" id='registerform'>
    <label>Hoeveel gasten?</label>

    <input  type="number" id='amountGuests' name="aantal_gasten" placeholder="1">
    <input type="text" name="voornaam" placeholder="voornaam">
    <input type="text" name="achternaam" placeholder="achternaam">
    <input type="text" name="email" placeholder="email">
    <select name="geslacht">
        <option value="man">Man</option>
        <option value="vrouw">Vrouw</option>
        <option value="anders">anders</option>
    </select>
    <input type="text" name="geboortedatum" placeholder="geboortedatum">
    <input type="text" name="adres" placeholder="adres"> 
    <input type="button" name="submit" value="submit">
</form>
<br>


<form action='search.php' method='POST' id='loginform'>
    <input id='emaillogin' type="text" name="search" placeholder="zoek een user...">
    <input type="button" name="submit" value="submit">  
</form>

<script src='js/main.jsx'></script>
</body>
</html>