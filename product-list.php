<?php include "header.php"?>
<?php include "db-product.php"?>
<?php include "connect.php";?>

<table class="table table-striped table-bordered">
<?php
$products = listProducts($conn);
foreach ($products as $product) {
    ?>

<tr>
    <td><?= $product['name']?></td>
    <td><?= $product['price']?></td>
</tr>

<?php
}
?>
</table>


<?php include "footer.php"?>
