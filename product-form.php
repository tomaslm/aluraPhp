<?php include "header.php";
include "connect.php";
include "db-category.php";
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
                    name="price"></td>
        </tr>
        <tr>
            <td>Description: </td>
            <td><textarea class="form-control"
                    name="description"></textarea></td>
        </tr>
        <tr>
            <td>Category: </td>
            <td>
                <?php
foreach (listCategories($conn) as $category) {
    ?>
                <input type="radio" name="category_id"
                    value="<?=$category['id']?>">
                <?=$category['name']?>
                <br />
                <?php
}
?>

            </td>
        </tr>
        <tr>
            <td colspan=2><input class="btn btn-primary"
                    type="submit" value="Add"></td>
        </tr>
    </table>
</form>

<?php include "footer.php"?>