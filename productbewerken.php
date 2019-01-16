<?php
    $productid = $_GET['productid'];
    try {
        $conn = new PDO("mysql:host=127.0.0.1;dbname=webshopdb", 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $statement = $conn->prepare("SELECT * FROM producten WHERE id = :fproductid");
        $statement->execute([
         'fproductid' => $productid
         ]);
         
        while ($row = $statement->fetch()) {
            $productnaam = $row['naam'];
            $productprijs = $row['prijs'];
            $productdescription = $row['description'];
        }	
            
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    
    $conn = null;	
?>

<form action="dbproductupdate.php" method="POST">

    <input name="productid" placeholder="Product id" value="<?php echo $productid ?>">
    <br>
    <input name="productnaam" placeholder="Product naam" value="<?php echo $productnaam ?>">
    <br>
    <input name="productprijs" placeholder="Product prijs" value="<?php echo $productprijs ?>">
    <br> 
    <input name="productdescription" placeholder="Product description" value="<?php echo $productdescription ?>">
    <br> 
    <button type="submit">Update</button>

</form>