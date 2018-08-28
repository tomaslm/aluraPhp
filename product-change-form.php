<?php include "header.php";
include "connect.php";
include "db-category.php";
include "db-product.php";

$id = $_GET['id'];
$product = findProduct($conn, $id);
$used = $product['used'] ? "checked='checked'" : "";
?>

<h1>Product change form</h1>

<form action="change-product.php" method="post">
    <input type="hidden" name="id" value="<?=$product['id']?>">
    <table class="table">

        <?php include "product-form-base.php"; ?>
    </table>
</form>

<?php include "footer.php"?>