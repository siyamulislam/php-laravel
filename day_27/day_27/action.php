<?php

use App\classes\Auth;
use App\classes\Calculator;
use App\classes\series;
use App\classes\WordCount;

require_once './vendor/autoload.php';
$result = '';
if (isset($_GET['page'])) {
    if ($_GET['page'] == 'home') {
        include "pages/home.php";
    } elseif ($_GET['page'] == 'calculator') {
        include "pages/calculator.php";
    } elseif ($_GET['page'] == 'word-count') {
        include "pages/word-count.php";
    } elseif ($_GET['page'] == 'series') {
        include "pages/series.php";
    } elseif ($_GET['page'] == 'file-upload') {
        include "pages/file-upload.php";
    } elseif ($_GET['page'] == 'file-rw') {
        include "pages/file-rw.php";
    } elseif ($_GET['page'] == 'login') {
        include "pages/login.php";
    } elseif ($_GET['page'] == 'logout') {
        $auth = new Auth($_POST);
        $auth->logout();
        include "pages/login.php";
    }
}









elseif (isset($_POST['calculate_btn'])) {
    $calculator = new Calculator($_POST);
    $result = $calculator->getResult();
    include "pages/calculator.php";
} elseif (isset($_POST['series_btn'])) {
    $series = new Series($_POST);
    $result = $series->getResult();
    include "pages/series.php";
} elseif (isset($_POST['word_btn'])) {
    $wordCount = new WordCount($_POST);
    $result = $wordCount->getCountedStrings();
    include "pages/word-count.php";
}

elseif (isset($_POST['btn'])) {
   if ($_POST['btn'] == 'Login') {
        $auth = new Auth($_POST);
       $authResult= $auth->login();
//        if ($authResult=='success'){
//            include "pages/series.php";
//        }
//        else {
////            echo '<script>alert("Email/Password is invalid!")</script>';
            include "pages/login.php";
//        }


    }

}