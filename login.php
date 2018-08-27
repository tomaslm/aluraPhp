<?php include "connect.php";
include "db-user.php";
include "user-logic.php";

$user = findUser($conn, $_POST["email"], $_POST["password"]);

$logged = $user != null;
if ($logged) {
    loginUser($user["email"]);
} else {
}
header("Location: index.php?logged={$logged}");
die();
