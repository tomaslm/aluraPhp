<?php 
session_start();
function isUserLogged(){
    return isset($_SESSION["logged_user"]);
}

function verifyUser(){    
    if(!isUserLogged()){
        $_SESSION["danger"] = "You don't have access to this functionality.";
        header("Location: index.php");
        die();
    }
}

function getLoggedUser(){
    return $_SESSION["logged_user"];
}

function loginUser($email){
    $_SESSION["logged_user"] = $email;
}
function logout(){
    session_destroy();
    session_start();
}