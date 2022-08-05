<?php 

function db_connect(){

    try {
         $db = new PDO("mysql:host=localhost;dbname=db_tech&go","root");
    } catch (\PDOException $error) {
        var_dump($error->getMessage());
    }
    return $db ;
}