<?php 
require_once "connect.php";

function findUser($conn, $email, $password)
{

    $email = mysqli_real_escape_string($email);
    $password = mysqli_real_escape_string($password);

    $passwordMd5 = md5($password);
    $query = "select * from users where email = '{$email}' and password = '{$passwordMd5}'";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result);
}