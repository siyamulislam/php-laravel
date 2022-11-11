<?php

require_once 'vendor/autoload.php';

use App\classes\Brand;
use App\classes\Product;
use App\classes\Category;
use App\classes\Products;


$product = new Product();
//$category = new Category();
//$brand = new Brand();

$brand = new Brand($_POST, $_FILES);
$brands = $brand->getAllBrand();
$lastBrandID = $brand->getLastBrandID();

$category = new Category($_POST, $_FILES);
$categories = $category->getAllCategory();
$lastCategoryID = $category->getLastCategoryID();
$productt = new Products($_POST, $_FILES);
//$productss = $product->getProductsByCategory();
$lastProductID = $productt->getLastProductID();

if (isset($_GET['page'])) {
    if ($_GET['page'] == 'home') {
        $products = $product->getAllProduct();
        include 'pages/home.php';
    } elseif ($_GET['page'] == 'category') {
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
    } elseif ($_GET['page'] == 'add-brand') {
        include 'pages/add-brand.php';
    } elseif ($_GET['page'] == 'add-category') {
        include 'pages/add-category.php';
    }elseif ($_GET['page'] == 'add-product') {
        include 'pages/add-product.php';
    }
} elseif (isset($_POST['btn'])) {
    if ($_POST['btn'] == 'Add Brand') {
        $brand = new Brand($_POST, $_FILES);
        $lastBrandID = $brand->getLastBrandID();
        $message = $brand->saveBrandInfo();
//        echo '<script>alert("Email/Password is invalid!")</script>';
        header("Location: action.php?page=add-brand");
//       include "pages/add-brand.php";
//       sleep(2);
    }
    if ($_POST['btn'] == 'Add Category') {
        $category = new Category($_POST, $_FILES);
        $lastCategoryID = $category->getLastCategoryID();
        $message = $category->saveCategoryInfo();
        header("Location: action.php?page=add-category");
    }
    if ($_POST['btn'] == 'Add Product') {
        $product = new  Products($_POST, $_FILES);
        $lastProductID = $product->getLastProductID();
        $message = $product->saveProductInfo();
        header("Location: action.php?page=add-product");
    }


}

