<?php

try{
    $conn = new PDO("mysql:host=127.0.0.1;dbname=webshopdb", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->query("SELECT * FROM bestellingen");
    while ($row = $stmt->fetch()) {
        echo "<li>" . $row['id'] . " - ";
        echo $row['email'] . " - ";
        echo $row['productid'] . " - ";
        echo $row['tebetalen'] . " - ";
        echo "</li>";
    }
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$conn = NULL;
?>  