<?php
$productid = $_POST['productid'];
$productnaam = $_POST['productnaam'];
$productprijs = $_POST['productprijs'];
$productdescription = $_POST['productdescription'];

try
{
    $conn = new PDO("mysql:host=127.0.0.1;dbname=webshopdb", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("UPDATE producten SET naam=:fnaam, prijs=:fprijs, productdescription=:fproductdescription WHERE id = :fproductid");



    $stmt->execute([
        'fnaam' => $productnaam,
        'fprijs' => $productprijs,
        'fproductid' => $productid,
        'fproductdescription' =>$productdescription
]);

}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$conn = NULL;

header("Location: index.php");

?> 