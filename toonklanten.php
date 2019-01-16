<form>
    <input name="naamfilter" placeholder="naam bevat">
    <input type=submit value="Search">
</form>


<?php

if (isset($_GET['naamfilter']))
{
    $naamfilter = $_GET['naamfilter'];
}
else
{
    $naamfilter = "";
}

try{
    $conn = new PDO("mysql:host=127.0.0.1;dbname=webshopdb", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->query("SELECT * FROM klanten WHERE naam LIKE '%$naamfilter%'");
    while ($row = $stmt->fetch()) {
        echo "<li>" . $row['naam'] . " : " . $row['prijs'];
        echo " ";
        echo "<a href=dbklantverwijderen.php?productid=" . $row['id'] . ">Remove customer</a>";
        echo " ";
        echo "<a href=klantbewerken.php?productid=" . $row['id'] . ">Alter customer</a>";
        echo "</li>";
    }
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$conn = NULL;
?>  