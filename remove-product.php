<?php include "header.php";
include "db-product.php";
include "connect.php";

$id = $_POST['id'];

removeProduct($conn, $id);
$_SESSION["success"] = "Deleted with success";
header("Location: product-list.php");
die();
?>

<p class="text-success"> Product
    <?=$id?> removed </p>

<?php include "footer.php"?>