<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

    <title>main page webshop</title>
  </head>
  <body>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Rome's Armory</h1>
    <p class="lead">The premier place for your daily needs.</p>
  </div>
</div>

<!--==========================
  About This site
============================-->
<section id="about">
  <div class="container spacer200">
  <div class="row about-container">
    <div class="col-lg-6 content order-lg-1 order-1">
    <h2 class="title">SALVE CIVIS!</h2>
    <p>On behalf of the Senate and the People of Rome let me be 
      the first to welcome you to the greatest civilization of 
      the known world.<p>
    <p>One of the pillars of the Roman world was commerce.
      And how can commerce flourish without a nice little place
      where to show of your wares and order products?</p>

    <p>Welcome to the greatest shop sine the time of August!</p>
    </div>
  </div>
  </div>
</section>

<!--==========================
  carousel further work needed
============================-->
<section id="imgcarousel">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"> 
    <div class="carousel-inner about-custom-image-size">
      <div class="carousel-item active">
        <img src="img/car1.jpg" class="mx-auto d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/car2.jpg" class="mx-auto d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/car3.jpg" class="mx-auto d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>

<!--==========================
  navbar
============================-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Rome's Armory</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="producttoevoegen.html">Add product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="klanttoevoegen.html">Add product</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<br>
<hr>
<br>

<h2>Products</h2>
<?php
  include("toonproducten.php");
?>

<br>
<hr>
<br>

<h2>Customers</h2>
<?php
  include("toonklanten.php");
?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>