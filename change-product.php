<?php include "header.php"?>
<?php include "connect.php"?>
<?php include "db-product.php"?>

<?php

$id = $_POST["id"];
$name = $_POST["name"];
$price = $_POST["price"];
$description = $_POST["description"];
$category_id = $_POST["category_id"];
if (array_key_exists("used", $_POST)) {
    $used = "true";
} else {
    $used = "false";
}

if (changeProduct($conn, $id, $name, $price, $description, $category_id, $used)) {?>
<p class="text-success"> Product
    <?php echo $name; ?> changed with success,
    price =
    <?php echo $price ?>
</p>
<?php } else {
    $msg = mysqli_error($conn);
    ?>
<p class="text-danger"> Product
    <?php echo $name; ?> has not been
    changed. Error:
    <?php echo $msg ?>
</p>
<?php
}

mysqli_close($conn);
?>


<?php include "footer.php"?>