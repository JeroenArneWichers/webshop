<?php
$productnaam = $_POST['productnaam'];
$productprijs = $_POST['productprijs'];
$productdescription = $_POST['productdescription'];

try
{
    $conn = new PDO("mysql:host=127.0.0.1;dbname=webshopdb", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("INSERT INTO producten (naam, prijs, description) VALUES (:fnaam, :fprijs, :fdescription)");

    $stmt->execute([
        'fnaam' => $productnaam,
        'fprijs' => $productprijs,
        'fdescription' => $productdescription
]);

}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$conn = NULL;

header("Location: index.php");

?> 