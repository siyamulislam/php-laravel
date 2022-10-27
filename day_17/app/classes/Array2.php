<?php


namespace App\classes;


class Array2
{

    public $message;
    private $x = 10, $y = 20, $z = 30;
    public $names = [];
    public function __construct()
    {
        $this->message = "hey,\n";
    }
public function index(){
    echo $this->message."</br>";

}
}