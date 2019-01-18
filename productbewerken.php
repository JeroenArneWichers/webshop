<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- Main Stylesheet File trough PHP -->
    <link rel="stylesheet" href="css/style.php" media="screen">
    
    <!-- Main Stylesheet File -->
    <!-- <link href="css/style.css" rel="stylesheet"> -->

    <title>main page webshop</title>
  </head>
  <body>

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

    <div class="container-fluid spacertop100 spacerbottom100">
        <div class="row justify-content-md-center">
            <form action="dbproductupdate.php" method="POST">
                <div class="form-group">
                    <input class="form-control" name="productid" placeholder="Product id" value="<?php echo $productid ?>"><br>
                    <input class="form-control" name="productnaam" placeholder="Product name" value="<?php echo $productnaam ?>"><br>
                    <input class="form-control" name="productprijs" placeholder="Product price" value="<?php echo $productprijs ?>"><br>
                    <input class="form-control" name="productdescription" placeholder="Product description" value="<?php echo $productdescription ?>"><br>
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>