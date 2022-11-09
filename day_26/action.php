<?php

require_once 'vendor/autoload.php';

use App\classes\Category;
use App\classes\Product;
use App\classes\Auth;

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
    } elseif ($_GET['page'] == 'product-detail') {
        $single_product = $product->getProductById($_GET['id']);
        include 'pages/product-detail.php';
    } elseif ($_GET['page'] == 'login') {
        include 'pages/login.php';
    }
} elseif (isset($_POST['btn'])) {
    if ($_POST['btn'] == 'Add Product') {
        $product = new Product($_POST, $_FILES);
        $message = $product->saveProductInfo();
        include "pages/add-product.php";

    }
    elseif ($_POST['btn'] == 'Login') {
        $auth = new Auth($_POST);
        $result= $auth->login();
        if ($result=='success'){
            include "pages/add-product.php";
        }
        else {
//            echo '<script>alert("Email/Password is invalid!")</script>';
            include "pages/login.php";
        }


    }

}



