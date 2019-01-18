<?php
$productid = $_GET['productid'];
$besteller = 'jwichers@Konoha.kh';
$tebetalen = 0.00;
try {
    $conn = new PDO("mysql:host=127.0.0.1;dbname=webshopdb", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $conn->prepare("SELECT * FROM producten WHERE id = :fproductid");
    $statement->execute([
     'fproductid' => $productid
     ]);
     
    while ($row = $statement->fetch()) {
        $tebetalen = $row['prijs'];
    }	
        
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$conn = null;	
try {
    $conn = new PDO("mysql:host=127.0.0.1;dbname=webshopdb", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $conn->prepare('INSERT INTO bestellingen (email, productid, tebetalen) VALUES (:femail, :fproductid, :ftebetalen)');
    $statement->execute([
    'femail' => $besteller,
    'fproductid' => $productid,
    'ftebetalen' => $tebetalen
    ]);
	
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
	
$conn = NULL;
header("Location: index.php#showproducts");
?> 