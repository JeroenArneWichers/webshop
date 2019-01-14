<?php
$productnaam = $_POST['productnaam'];
$productprijs = $_POST['productprijs'];

try
{
    $conn = new PDO("mysql:host=127.0.0.1;dbname=webshopdb", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("INSERT INTO producten (naam, prijs) VALUES (:fnaam, :fprijs)");
    
    $stmt->execute([
        'fnaam' => $productnaam,
        'fprijs' => $productprijs
]);

}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$conn = NULL;
?> 