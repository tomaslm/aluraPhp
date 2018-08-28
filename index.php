<?php require_once "header.php";
require_once "user-logic.php";
?>

<h1>Store in php!
    <?php //phpinfo()?>
</h1>
<?php if(isUserLogged()){
    ?>
<p class="text-success">Welcome <?=getLoggedUser()?></p><a href="logout.php">Logout</a>
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
<?php require_once "footer.php"?>