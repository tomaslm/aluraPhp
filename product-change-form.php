<?php include "header.php";
include "connect.php";
include "db-category.php";
include "db-product.php";

$id = $_GET['id'];
$product = findProduct($conn, $id);
$used = $product['used'] ? "checked='checked'" : "";
?>

<h1>Product change form</h1>

<form action="change-product.php" method="post">
    <input type="hidden" name="id" value="<?=$product['id']?>">
    <table class="table">
        <tr>
            <td>Name: </td>
            <td> <input class="form-control" type="text"
                    name="name" value="<?=$product['name']?>">
            </td>
        </tr>
        <tr>
            <td>Price: </td>
            <td><input class="form-control" type="number"
                    step="0.01" name="price"
                    value="<?=$product['price']?>"></td>
        </tr>
        <tr>
            <td>Description: </td>
            <td><textarea class="form-control"
                    name="description"><?=$product['name']?></textarea></td>
        </tr>
        <tr>
            <td>Category: </td>
            <td>
                <select name="category_id" class="form-control">
                    <?php
foreach (listCategories($conn) as $category) {
    $choosenCategory = $product['category_id'] == $category['id'];
    $selectedCategory = $choosenCategory ? "selected='selected'" : "";
    ?>
                    <option value="<?=$category['id']?>"
                        <?=$selectedCategory?> >
                        <?=$category['name']?>
                    </option>
                    <?php }?>
                </select>

            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="checkbox" name="used"
                    <?=$used?>>Used</td>
        </tr>
        <tr>
            <td colspan=2><input class="
                        btn btn-primary"
                    type="submit" value="Change">
            </td>
        </tr>
    </table>
</form>

<?php include "footer.php"?>