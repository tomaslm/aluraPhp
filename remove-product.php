<?php require_once "header.php";
require_once "db-product.php";


$id = $_POST['id'];

removeProduct($conn, $id);
$_SESSION["success"] = "Deleted with success";
header("Location: product-list.php");
die();
?>

<p class="text-success"> Product
    <?=$id?> removed </p>

<?php require_once "footer.php"?>