<?php

require_once 'vendor/autoload.php';

use App\classes\Brand;
use App\classes\Product;
use App\classes\Category;


$product = new Product();
$category = new Category();
//$brand = new Brand();

$brand = new Brand($_POST, $_FILES);

$brands = $brand->getAllBrand();
$lastBrandID= $brand->getLastBrandID();

if (isset($_GET['page'])) {
    if ($_GET['page'] == 'home') {
        $products = $product->getAllProduct();
        include 'pages/home.php';
    } elseif ($_GET['page'] == 'category') {
        $categories = $category->getAllCategory();
        include 'pages/category.php';
    } elseif ($_GET['page'] == 'category-product') {
        $productsByCategory = $product->getProductsByCategory($_GET['category_id']);
        include 'pages/category-product.php';
    } elseif ($_GET['page'] == 'brand') {
//        echo '<pre>';
//        print_r($brands);
        include "pages/brand.php";
    } elseif ($_GET['page'] == 'brand-product') {
        $productByBrand = $product->getProductsByBrand($_GET['brand_id']);
        include 'pages/brand-product.php';
    } elseif ($_GET['page'] == 'product-details') {
        $singleProduct = $product->getProductByid($_GET['id']);
        include 'pages/product-details.php';
    }elseif ($_GET['page'] == 'add-brand') {
        include 'pages/add-brand.php';
    }
}

elseif (isset($_POST['btn'])) {
    if ($_POST['btn'] == 'Add Brand') {
        $brand = new Brand($_POST, $_FILES);
        $lastBrandID= $brand->getLastBrandID();
        $message = $brand->saveBrandInfo();
//        echo '<script>alert("Email/Password is invalid!")</script>';
        header("Location: action.php?page=add-brand");
//       include "pages/add-brand.php";
//       sleep(2);
    }



}

