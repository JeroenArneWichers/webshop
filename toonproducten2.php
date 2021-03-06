<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.6.3/js/all.js" integrity="sha384-EIHISlAOj4zgYieurP0SdoiBYfGJKkgWedPHH4jCzpCXLmzVsw1ouK59MuUtP4a1" crossorigin="anonymous"></script>



    <title>toonproducten2</title>
  </head>
  <body>

<!-- <form>
  <input name="naamfilter" placeholder="naam bevat">
  <input type=submit value="Search">
</form> -->

<?php
if (isset($_GET['naamfilter']))
{
    $naamfilter = $_GET['naamfilter'];
}
else
{
    $naamfilter = "";
}
?>



  <?php
  $conn = new PDO("mysql:host=127.0.0.1;dbname=webshopdb", "root", "");
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $conn->query("SELECT * FROM producten WHERE naam LIKE '%$naamfilter%'");
  while ($row = $stmt->fetch()) 
  {
  ?>
<!-- col-12 col-sm-6 col-md-4  -->
  <div class="col-lg-2 m-4 justify-content-md-center">
    <div class="card" style="width: 18rem;">
      <img src=<?php echo "https://res.cloudinary.com/jeroenarnewicherscdn/image/upload/v1547815938/roman-webshop/header.jpg" ?> class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['naam']?></h5>
        <p class="card-text"><?php echo $row['prijs']?></p>
        <p class="card-text"><?php echo $row['description']?></p>
        <a href=<?php echo"dbproductverwijderen.php?productid=" . $row['id']?> class="btn btn-danger"><i class="fas fa-dumpster"></i></a>
        <a href=<?php echo"productbewerken.php?productid=" . $row['id']?> class="btn btn-danger"><i class="fas fa-edit"></i></a>
        <a href=<?php echo"koopproduct.php?productid=" . $row['id']?> class="btn btn-danger">Buy Product</a>
      </div>
    </div>
  </div>

    <?php

  }

  $conn = NULL;
  ?>  




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>