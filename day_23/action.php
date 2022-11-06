<?php

require_once 'vendor/autoload.php';

use App\classes\Category;
use App\classes\Student;


////For post method
//echo '<pre>';
//print_r($_POST);
$category = new Category();
$categories = $category->getAllCategories();


//$result = '';
if (isset($_GET['page'])) {

    if ($_GET['page'] == 'home') {

        include 'pages/home.php';
    } elseif ($_GET['page'] == 'add-student') {

        include 'pages/add-student.php';
    }
} elseif (isset($_POST['btn'])) {
    if ($_POST['btn'] == 'add_student') {


        $student = new Student($_POST, $_FILES);
        $saveStudentInfo = $student->saveStudentInfo();
        include "pages/add-student.php";
    }

}






