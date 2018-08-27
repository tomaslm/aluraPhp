<?php 

function isUserLogged(){
    return isset($_COOKIE["logged_user"]);
}

function verifyUser(){    
    if(!isUserLogged()){
        header("Location: index.php?security_error=true");
        die();
    }
}

function getLoggedUser(){
    return $_COOKIE["logged_user"];
}

function loginUser($email){
    setcookie("logged_user", $email, time() + 60);
}