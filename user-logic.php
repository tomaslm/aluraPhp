<?php 
session_start();
function isUserLogged(){
    return isset($_SESSION["logged_user"]);
}

function verifyUser(){    
    if(!isUserLogged()){
        header("Location: index.php?security_error=true");
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
}