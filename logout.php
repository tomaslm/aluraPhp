<?php include("user-logic.php");

logout();
$_SESSION["success"] = "Logged out successifully.";
header("Location: index.php");
die();