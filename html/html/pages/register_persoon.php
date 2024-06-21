<?php
include 'conn.php';
echo $_POST['aantal_gasten'];

for($i = 0; $i < $_POST['aantal_gasten']; $i++){
    $sql = "INSERT INTO users (voornaam, achternaam, email, geslacht, geboortedatum, adres) VALUES (:voornaam, :achternaam, :email, :geslacht, :geboortedatum, :adres)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        'voornaam' => $_POST['voornaam'],
        'achternaam' => $_POST['achternaam'],
        'email' => $_POST['email'],
        'geslacht' => $_POST['geslacht'],
        'geboortedatum' => $_POST['geboortedatum'],
        'adres' => $_POST['adres']
        'booking_id' => $_SESSION['booking_id']
    ]);
}
?>

<?php
include 'conn.php';
echo $_POST['aantal_gasten'];

for($i = 0; $i < $_POST['aantal_gasten']; $i++){
    $sql = "INSERT INTO users (voornaam, achternaam, email, geslacht, geboortedatum, adres) VALUES (:voornaam, :achternaam, :email, :geslacht, :geboortedatum, :adres)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        'voornaam' => $_POST['voornaam'],
        'achternaam' => $_POST['achternaam'],
        'email' => $_POST['email'],
        'geslacht' => $_POST['geslacht'],
        'geboortedatum' => $_POST['geboortedatum'],
        'adres' => $_POST['adres']
        'booking_id' => $_SESSION['booking_id']
    ]);
}
?>