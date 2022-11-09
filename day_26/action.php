<?php

require_once 'vendor/autoload.php';

use App\classes\Category;
use App\classes\Product;

$category = new Category();
$categories = $category->getCategories();
//print_r($categories);
$product = new Product();
$products = $product->getAllProducts();

if (isset($_GET['page'])) {

    if ($_GET['page'] == 'home') {
        $product = new Product();
        $products = $product->getAllProducts();
//print_r($products);
        include 'pages/home.php';
    } elseif ($_GET['page'] == 'add-product') {

        include 'pages/add-product.php';
    } elseif ($_GET['page'] == 'category') {
        $products = $product->getProductsByCategory($_GET['id']);
        include 'pages/category-product.php';
    }
} elseif (isset($_POST['btn'])) {
    if ($_POST['btn'] == 'Add Product') {
        $product = new Product($_POST, $_FILES);
        $message = $product->saveProductInfo();
        include "pages/add-product.php";

    }

}



