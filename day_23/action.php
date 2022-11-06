<?php

require_once 'vendor/autoload.php';

use App\classes\Calculator;
use App\classes\FullName;
use App\classes\Series;
use App\classes\WordCount;
use App\classes\Category;


//echo $_GET['first_name'];
//echo '<pre>';
//print_r($_GET);
//exit();
//

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






