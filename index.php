<?php include "header.php";
include "user-logic.php";

if (isset($_GET["logged"]) && $_GET["logged"] == true) {
    ?>
    <p class="alert-success">Logged with success</p>
<?php } else if(isset($_GET["logged"]) && $_GET["logged"] == false) {?>
    <p class="alert-danger">Login failed</p>

<?php } ?>

<?php if(isset($_GET["security_error"]) && $_GET["security_error"] == true) { ?>
    <p class="alert-alert-danger">You don't have access to this functionality</p>
<?php }?>

<h1>Store in php!
    <?php //phpinfo()?>
</h1>
<?php if(isUserLogged()){
    ?>
<p class="text-success">Welcome <?=getLoggedUser()?></p>
    <?php
} else {
?>

<h2>Login</h2>
<form action="login.php" method="post">
    <table class="table">
        <tr>
            <td>Email</td>
            <td><input class="form-control" type="email" name="email"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input class="form-control" type="password" name="password"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><button class="btn btn-primary" >Login</button></td>
        </tr>
    </table>
</form>
<?php
}
?>
<?php include "footer.php"?>