<?php include("header.php") ?>

    <h1>Product's form</h1>
    
    <form action="add-product.php">
        Name: <input type="text" name="name">
        Price: <input type="number" name="price">
        <input type="submit" value="Add">
    </form>

<?php include("footer.php") ?>