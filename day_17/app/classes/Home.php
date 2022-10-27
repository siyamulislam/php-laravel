<?php


namespace App\classes;


class Home
{

//    public $message;
//    private $x = 10, $y = 20, $z = 30;
//    public $names = [];

//    public function __construct()
//    {
//    }

    public function index()
    {
        header("Location: action.php?page=home");
//        $_GET['page'];


    }
}