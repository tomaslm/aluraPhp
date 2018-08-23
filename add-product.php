<?php include "header.php"?>

<?php
$name = $_GET["name"];
$price = $_GET["price"];

$conn = mysqli_connect('localhost', 'root', '', 'store');

$query = "insert into products (name, price) values ('{$name}',{$price})";
$status = mysqli_query($conn, $query);

if ($status) {?>
    <p class="alert-success"  > Product <?php echo $name; ?> added with success, price = <?php echo $price ?></p>
<?php } else {?>
 <p class="alert-danger"  > Product <?php echo $name; ?> has not been addeds, price = <?php echo $price ?></p>
   <?php
}

mysqli_close($conn);
?>


<?php include "footer.php"?>