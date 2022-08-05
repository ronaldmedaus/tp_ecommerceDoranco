<?php

include "db.php";

function connectUser($username,$password){

    $db = db_connect() ;

    //étape 1 je récupère le user 
    $sql = "SELECT * FROM admin WHERE username = ?" ;

    $req = $db->prepare($sql);
    $req->execute([$username]);

    $result = $req->fetch(PDO::FETCH_ASSOC);//si trouver renvoie user si non false

    if($result == false){
        return "username invalide";
    }

    //2eme étape on vérifie le mdp

    $isOk = password_verify($password,$result["password"]) ;

    if($isOk){
        $_SESSION["isConnected"] = true ;
        $_SESSION["username"] = $username ;
        header("location:dashboard.php");
    } else {
        return "le mot de passe est invalide";
    }

}