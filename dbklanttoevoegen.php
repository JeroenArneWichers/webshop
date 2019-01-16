<?php
$klantnaam = $_POST['naam'];
$klantadress = $_POST['adress'];
$klantwoonplaats = $_POST['woonplaats'];
$klantpostcode = $_POST['postcode'];
$klanttelefoon = $_POST['telefoon'];
$klantemail = $_POST['email'];

try
{
    $conn = new PDO("mysql:host=127.0.0.1;dbname=webshopdb", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("INSERT INTO klanten (naam, adress, woonplaats, postcode, telefoon, email) VALUES (:fnaam, :fadress, :fwoonplaats, :fpostcode, :ftelefoon, :femail)");

    $stmt->execute([
        'fnaam' => $klantnaam,
        'fadress' => $klanadress,
        'fwoonplaats' => $klantwoonplaats,
        'fpostcode' => $klantpostcode,
        'ftelefoon' => $klanttelefoon,
        'femail' => $klantemail

]);

}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$conn = NULL;

header("Location: index.php");

?> 