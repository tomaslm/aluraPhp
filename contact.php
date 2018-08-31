<?php require_once "header.php";?>

<form action="send-contact.php" method="post" >
    <table class="table">
        <tr>
            <td>Name</td>
            <td><input class="form-control" type="text" name="name"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input class="form-control" type="email" name="email"></td>
        </tr>
        <tr>
            <td>Message</td>
            <td><textarea class="form-control" name="message"></textarea></td>
        </tr>
        <tr>
            <td colspan=2><button class="btn btn-primary" >Send</button></td>
        </tr>
    </table>
</form>

<?php require_once "footer.php";?>