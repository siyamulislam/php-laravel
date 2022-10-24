<?php


namespace App\classes;


class HelloWorld
{
    public $message;
    public function __construct()
    {
        $this->message='hello World';
    }

    public function index(){
        echo $this->message;
    }
}