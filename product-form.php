<?php include "header.php"?>

    <h1>Product's form</h1>

    <form action="add-product.php">
        <table class="table">
            <tr>
                <td>Name: </td> 
                <td> <input class="form-control" type="text" name="name"> </td>
            </tr>
            <tr>
                <td>Price: </td>
                <td><input class="form-control" type="number" name="price"></td>
            </tr>
            <tr>
                <td><input class="btn btn-primary" type="submit" value="Add"></td>
            </tr>
        </table>
    </form>

<?php include "footer.php"?>