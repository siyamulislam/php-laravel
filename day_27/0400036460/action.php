<?php

require_once 'vendor/autoload.php';

use App\classes\Brand;
use App\classes\Product;
use App\classes\Category;

$brand = new Brand($_POST, $_FILES);
$brands = $brand->getAllBrand();
$lastBrandID = $brand->getLastBrandID();

$category = new Category($_POST, $_FILES);
$categories = $category->getAllCategory();
$lastCategoryID = $category->getLastCategoryID();

$product = new Product($_POST, $_FILES);
$lastProductID = $product->getLastProductID();

$productsByCategory=[];
$productByBrand=[];
$singleProduct=[];

if (isset($_GET['page'])) {
    if ($_GET['page'] == 'home') {
        $products = $product->getAllProducts();
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
        $productByBrand= $product->getProductsByBrand($_GET['brand_id']);
        include 'pages/brand-product.php';
    } elseif ($_GET['page'] == 'product-details') {
        $singleProduct = $product->getProductByID($_GET['id']);
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
        header("Location: action.php?page=add-brand");
    }
    if ($_POST['btn'] == 'Add Category') {
        $category = new Category($_POST, $_FILES);
        $lastCategoryID = $category->getLastCategoryID();
        $message = $category->saveCategoryInfo();
        header("Location: action.php?page=add-category");
    }
    if ($_POST['btn'] == 'Add Product') {
        $product = new  Product($_POST, $_FILES);
        $lastProductID = $product->getLastProductID();
        $message = $product->saveProductInfo();
        header("Location: action.php?page=add-product");
    }

}

