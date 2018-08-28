<?php require_once "header.php";

require_once "db-product.php";
require_once "user-logic.php";
verifyUser();

$name = $_POST["name"];
$price = $_POST["price"];
$description = $_POST["description"];
$category_id = $_POST["category_id"];
if (array_key_exists("used", $_POST)) {
    $used = "true";
} else {
    $used = "false";
}

if (insertProduct($conn, $name, $price, $description, $category_id, $used)) {?>
<p class="text-success"> Product
    <?php echo $name; ?> added with success,
    price =
    <?php echo $price ?>
</p>
<?php } else {
    $msg = mysqli_error($conn);
    ?>
<p class="text-danger"> Product
    <?php echo $name; ?> has not been
    added.Error:
    <?php echo $msg ?>
</p>
<?php
}

mysqli_close($conn);
?>


<?php require_once "footer.php"?>