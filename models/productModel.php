<?php

include "db.php";

function getBestProducts() {

    $db = db_connect();

    $sql = "SELECT * FROM `products` ORDER BY `score` DESC LIMIT 3" ;

    // $req = $db->query($sql,PDO::ATTR_DEFAULT_FETCH_MODE)

    $req = $db->prepare($sql);
    $req->execute();
    
    $result = $req->fetchAll(PDO::FETCH_ASSOC) ;

    makeProducts($result) ;

}


function getAllProducts() {

    $db = db_connect();

    $sql = "SELECT * FROM `products`" ;

    $req = $db->prepare($sql);
    $req->execute();
    
    $result = $req->fetchAll(PDO::FETCH_ASSOC) ;

    makeProducts($result) ;

}

function getProductsByCategory($id_category){

    $db = db_connect();

    $sql = "SELECT * FROM `products` WHERE id_category = ?" ;
 
    $req = $db->prepare($sql);
    $req->execute([$id_category]);
    
    $result = $req->fetchAll(PDO::FETCH_ASSOC) ;

    makeProducts($result);

}


function getProductById($product_id){

    $db = db_connect();

    $sql = "SELECT * FROM `products` WHERE id = ?" ;
 
    $req = $db->prepare($sql);
    $req->execute([$product_id]);
    
    $result = $req->fetch(PDO::FETCH_ASSOC) ;

    return $result;
}



function makeProducts($arrayProducts){

    foreach ( $arrayProducts as $product ) {

        $product_id = $product["id"];
        $product_name = $product["name"];
        $url_img = $product["urlImg"];
        $price = $product["price"];
        $score = $product["score"];

        include "views/product.php";
    }
}