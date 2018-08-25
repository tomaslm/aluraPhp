<?php include "header.php"?>
<?php include "connect.php"?>
<?php include "db-product.php"?>

<?php

$name = $_POST["name"];
$price = $_POST["price"];
$description = $_POST["description"];
$category_id = $_POST["category_id"];

if (insertProduct($conn, $name, $price, $description, $category_id)) {?>
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


<?php include "footer.php"?>