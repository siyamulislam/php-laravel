<?php

require_once 'vendor/autoload.php';

use App\classes\Category;


////For post method
//echo '<pre>';
//print_r($_POST);
$category = new Category();
$categories = $category->getAllCategories();

//$result = '';
if (isset($_GET['page'])) {

    if ($_GET['page'] == 'home') {

        include 'pages/home.php';
    }

    elseif ($_GET['page'] == 'add-student') {

        include 'pages/add-student.php';
    }
}






