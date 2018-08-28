<?php require_once "header.php";

require_once "db-category.php";
require_once "user-logic.php";

verifyUser();
$product = array("name" => "", "description" => "", "price" => "", "category_id"=>"1");
$used = "";
?>

<h1>Product's form</h1>

<form action="add-product.php" method="post">
    <table class="table">
        <?php require_once "product-form-base.php";?>
    </table>
</form>

<?php require_once "footer.php"?>