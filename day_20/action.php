<?php

use App\classes\Calculator;
use App\classes\EvenOdd;
use App\classes\FullName;
use App\classes\series;
use App\classes\Sumofseries;

require_once './vendor/autoload.php';
$result='';

if(isset($_GET['page'])){
    if($_GET['page']=='home'){
        include "pages/home.php";
    }
    elseif ($_GET['page'] == 'full-name')
    {
        include "pages/full-name.php";
    }
    elseif ($_GET['page']=='calculator')
    {
        include "pages/calculator.php";
    }
    elseif ($_GET['page'] == 'series')
    {
        include 'pages/series.php';
    }

    elseif ($_GET['page'] == 'sum-series')
    {
        include 'pages/sum-of-series.php';
    }
    elseif ($_GET['page'] == 'even-odd')
    {
        include 'pages/even-odd.php';
    }
    elseif ($_GET['page'] == 'password-generator')
    {
        include 'pages/password-generator.php';
    }
}


elseif (isset($_POST['full_name_btn']))
{
    $fullName = new FullName($_POST);
    $result = $fullName->getFullName();
    include "pages/full-name.php";
}

elseif( isset($_POST['calculate_btn']))
{
    $calculator = new Calculator($_POST);
    $result = $calculator->getResult();
    include "pages/calculator.php";
}
elseif(isset($_POST['series_btn']))
{
    $series = new Series($_POST);
    $result = $series->getResult();
    include "pages/series.php";
}
elseif(isset($_POST['sum_series_btn']))
{
    $sumOfSeries = new Sumofseries($_POST);
    $result = $sumOfSeries->getResult();
    include "pages/sum-of-series.php";
}
elseif(isset($_POST['even_odd_btn']))
{
    $evenOdd = new EvenOdd($_POST);
    $result = $evenOdd->getResult();
    include "pages/even-odd.php";
}
elseif(isset($_POST['password_btn']))
{
    $passwordGenerate = new PasswordGenerate($_POST);
    $result = $passwordGenerate->newPassword();
    include "pages/password-generator.php";
}