<?php include "header.php";
include "connect.php";
include "db-category.php";
include "user-logic.php";

verifyUser();
$product = array("name" => "", "description" => "", "price" => "", "category_id"=>"1");
$used = "";
?>

<h1>Product's form</h1>

<form action="add-product.php" method="post">
    <table class="table">
        <?php include "product-form-base.php";?>
    </table>
</form>

<?php include "footer.php"?>