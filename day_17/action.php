<?php

//echo $_GET['page'];
require_once 'vendor/autoload.php';
use App\classes\Product;


if($_GET['page']=='home') {
    $products= new Product();
    $allProducts= $products->allProducts();
    include 'pages/home.php';
}
if($_GET['page']=='about')        include 'pages/about.php';


