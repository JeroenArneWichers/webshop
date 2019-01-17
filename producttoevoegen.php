<html>
<body>
    <form enctype="multipart/form-data" action="dbproducttoevoegen.php" method="POST">
        <input name="productnaam" placeholder="Product naam"><br>
        <input name="productprijs" placeholder="Product prijs"><br>
        <input name="productdescription" placeholder="Product description"><br>
        <button type="submit">Voeg toe</button>
    </form>
    <button id="upload_widget" class="cloudinary-button">Upload files</button>

    <form action="uploaded.php" method="post">
        <?php echo cl_image_upload_tag('image_id', array("callback" => $cors_location)); ?>
      </form>
</body>
</html>