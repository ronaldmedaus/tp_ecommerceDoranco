<?php
include "models/productModel.php";

$product_id = $_REQUEST["product_id"];

$product = getProductById($product_id);

include "views/detailsProductView.php";