<?php require_once "header.php";

require_once "db-category.php";
require_once "db-product.php";

$id = $_GET['id'];
$product = findProduct($conn, $id);
$used = $product['used'] ? "checked='checked'" : "";
?>

<h1>Product change form</h1>

<form action="change-product.php" method="post">
    <input type="hidden" name="id" value="<?=$product['id']?>">
    <table class="table">

        <?php require_once "product-form-base.php"; ?>
    </table>
</form>

<?php require_once "footer.php"?>