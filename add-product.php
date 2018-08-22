<?php include("header.php") ?>

<?php
    $name = $_GET["name"];
    $price = $_GET["price"];
?>

<p class="alert-success"    >Product <?php echo $name; ?> add with success, price = <?php echo $price?></p>

<?php include("footer.php") ?>