<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>main page webshop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<h1>Main page</h1>

<h2>intro to shop</h2>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi 
    consectetur veritatis id dicta debitis consequuntur molestiae blanditiis 
    dolore, et recusandae voluptates aut sed provident nesciunt nihil 
    accusamus hic natus? Recusandae ipsum nostrum amet, libero sequi 
    repudiandae adipisci dolores quisquam rem minus nesciunt alias perferendis 
    tempora. Nisi harum cum quam hic.
</p>

<h2>image carousel</h2>
<p>(images here)</p>

<ul>
    <li><a href="producttoevoegen.html">Add product</a>
    <li>menu item 2</li>
    <li>menu item 3</li>
</ul>

<br>
<hr>
<br>

<h2>Products</h2>
<?php
  include("toonproducten.php");
?>
    
</body>
</html>