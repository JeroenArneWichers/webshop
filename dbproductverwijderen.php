<?php
$productid = $_GET['productid'];

try 
{
    $conn = new PDO("mysql:host=127.0.0.1;dbname=webshopdb", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $conn->prepare('DELETE FROM producten WHERE ID=:fid');
    $statement->execute([
    'fid' => $productid
    ]);
	
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
	
$conn = NULL;
?>