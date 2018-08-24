<?php include "header.php";
include "db-product.php";
include "connect.php";?>

<?php if (array_key_exists('removed', $_GET) && $_GET['removed'] == true) {
    ?>
    <p class="alert-success" >Product deleted with success</p>
<?php
}
?>
<table class="table table-striped table-bordered">
<?php
$products = listProducts($conn);
foreach ($products as $product) {
    ?>

<tr>
    <td><?=$product['name']?></td>
    <td><?=$product['price']?></td>
    <td><?=substr($product['description'], 0, 40)?></td>
    <td>
        <form action="remove-product.php" method="post">
            <input type="hidden" name="id" value="<?=$product['id']?>">
            <button class="btn btn-danger">remove</button>
        </form>
    </td>
</tr>

<?php
}
?>
</table>


<?php include "footer.php"?>
