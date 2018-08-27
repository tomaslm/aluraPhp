<?php include "header.php";
include "connect.php";
include "db-category.php";
include "user-logic.php";

verifyUser();
?>

<h1>Product's form</h1>

<form action="add-product.php" method="post">
    <table class="table">
        <tr>
            <td>Name: </td>
            <td> <input class="form-control" type="text"
                    name="name"> </td>
        </tr>
        <tr>
            <td>Price: </td>
            <td><input class="form-control" type="number"
                    step="0.01" name="price"></td>
        </tr>
        <tr>
            <td>Description: </td>
            <td><textarea class="form-control"
                    name="description"></textarea></td>
        </tr>
        <tr>
            <td>Category: </td>
            <td>
                <select name="category_id" class="form-control">
                    <?php
foreach (listCategories($conn) as $category) {?>
                    <option value="<?=$category['id']?>">
                        <?=$category['name']?>
                    </option>
                    <?php }?>
                </select>

            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="checkbox" name="used"
                    value="true">Used</td>
        </tr>
        <tr>
            <td colspan=2><input class="
                        btn btn-primary"
                    type="submit" value="Add">
            </td>
        </tr>
    </table>
</form>

<?php include "footer.php"?>