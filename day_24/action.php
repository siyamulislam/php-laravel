<?php

require_once 'vendor/autoload.php';

use App\classes\Category;

$category = new Category();
$categories = $category->getCategories();
//print_r($categories);

if (isset($_GET['page'])) {

    if ($_GET['page'] == 'home') {

        include 'pages/home.php';
    } elseif ($_GET['page'] == 'add-product') {

        include 'pages/add-product.php';
    }

}



