<?php
session_start();
if(isset($_SESSION["isConnected"]) == false){
    header("location:admin.php");
}

include "views/dashboard.php";