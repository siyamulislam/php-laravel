<?php

require_once 'vendor/autoload.php';

use App\classes\Category;
use App\classes\Product;

$category = new Category();
$categories = $category->getCategories();
//print_r($categories);

if (isset($_GET['page'])) {

    if ($_GET['page'] == 'home') {
        $product= new Product(  );
        $products= $product->getAllProducts();

//        include 'pages/home.php';
    } elseif ($_GET['page'] == 'add-product') {

        include 'pages/add-product.php';
    }
}
elseif (isset($_POST['btn'])){
    if ($_POST['btn']== 'Add Product'){
        $product= new Product($_POST,$_FILES);
//        echo "<pre>";
//        print_r($_FILES);
        $message=$product->saveProductInfo();
        include "pages/add-product.php";

    }
}



