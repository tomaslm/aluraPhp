<?php include "header.php"?>
<?php include "connect.php"?>
<?php include "db-product.php"?>

<?php

$name = $_GET["name"];
$price = $_GET["price"];

if (insertProduct($conn, $name, $price)) {?>
    <p class="text-success"  > Product <?php echo $name; ?> added with success, price = <?php echo $price ?></p>
<?php } else {
    $msg = mysqli_error($conn);
    ?>
 <p class="text-danger"  > Product <?php echo $name; ?> has not been added.Error: <?php echo $msg ?></p>
   <?php
}

mysqli_close($conn);
?>


<?php include "footer.php"?>