<?php
session_start();

if(isset($_SESSION["isConnected"])){
    if($_SESSION["isConnected"] == true){
        header("location:dashboard.php");
    }
}

include "models/userModel.php";

function secure($data){
    return htmlspecialchars(stripslashes((trim($data))));
}

if(isset($_POST["username"])){
    $username = secure($_POST["username"]);
    $password = secure($_POST["password"]);

    $errorMessage = connectUser($username,$password);
}

include "views/login.php";