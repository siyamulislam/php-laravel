<?php

//echo $_GET['page'];
require_once 'vendor/autoload.php';
use App\classes\Products;


if($_GET['page']=='home') {
    $products= new Products();
    $allProducts= $products->allProducts();
    include 'pages/home.php';
}
if($_GET['page']=='about')        include 'pages/about.php';


