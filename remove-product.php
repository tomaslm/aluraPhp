<?php include "header.php";
include "db-product.php";
include "connect.php";

$id = $_POST['id'];

removeProduct($conn, $id);
header("Location: product-list.php?removed=true");
die();
?>

<p class="text-success"> Product
    <?=$id?> removed </p>

<?php include "footer.php"?>