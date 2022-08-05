<?php

$id_category = $_REQUEST["id"] ;

$category_name = $id_category == 1 ? "Pc portable" : "Apple IMAC" ;

include "models/productModel.php";


include "views/categoryView.php";