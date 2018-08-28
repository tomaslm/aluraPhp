<?php include "header.php";
include "db-product.php";
include "connect.php";
?>

<table class="table table-striped table-bordered">

    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Category</th>
        <th>Used</th>
        <th>Change</th>
        <th>Remove</th>
    </tr>
    <?php
$products = listProducts($conn);
foreach ($products as $product) {
    ?>
    <tr>
        <td>
            <?=$product['name']?>
        </td>
        <td>
            <?=$product['price']?>
        </td>
        <td>
            <?=substr($product['description'], 0, 40)?>
        </td>
        <td>
            <?=$product['category_name']?>
        </td>
        <td>
            <?=$product['used'] ? "true" : "false"?>
        </td>
        <td>
            <a class="btn btn-primary" href="product-change-form.php?id=<?=$product['id']?>">
                Change
            </a>
        </td>
        <td>
            <form action="remove-product.php"
                method="post">
                <input type="hidden" name="id"
                    value="<?=$product['id']?>">
                <button class="btn btn-danger">remove</button>
            </form>
        </td>
    </tr>

    <?php
}
?>
</table>


<?php include "footer.php"?>