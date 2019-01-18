<?php
$bestellingid = $_GET['bestellingid'];

try 
{
    $conn = new PDO("mysql:host=127.0.0.1;dbname=webshopdb", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $conn->prepare('DELETE FROM bestellingen WHERE ID=:fid');
    $statement->execute([
    'fid' => $bestellingid
    ]);
	
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
	
$conn = NULL;

header("Location: index.php");
?>