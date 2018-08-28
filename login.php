<?php 
require_once "db-user.php";
require_once "user-logic.php";

$user = findUser($conn, $_POST["email"], $_POST["password"]);

$logged = $user != null;
if ($logged) {
    loginUser($user["email"]);
} else {
    $_SESSION["danger"] = "Invalid user or password.";
}
header("Location: index.php");
die();
