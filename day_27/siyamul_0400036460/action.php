<?php

require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Product;
use App\classes\Category;
use App\classes\Brand;


$product = new Product();
$category = new Category();
$brand = new Brand();

if(isset($_GET['page']))
{
    if($_GET['page'] == 'home')
    {
        $products = $product->getAllProduct();
        include 'pages/home.php';
    }
    elseif($_GET['page'] == 'category')
    {
        $categories = $category->getAllCategory();
        include 'pages/category.php';
    }
    elseif ($_GET['page'] == 'category-product')
    {
        $productsByCategory = $product->getProductsByCategory($_GET['category_id']);
        include 'pages/category-product.php';
    }
    elseif ($_GET['page'] == 'brand')
    {
        $brands = $brand->getAllBrand();
        include "pages/brand.php";
    }
    elseif($_GET['page'] == 'brand-product')
    {
        $productByBrand = $product->getProductsByBrand($_GET['brand_id']);
        include 'pages/brand-product.php';
    }
    elseif($_GET['page'] == 'product-details')
    {
        $singleProduct = $product->getProductByid($_GET['id']);
        include 'pages/product-details.php';
    }
}