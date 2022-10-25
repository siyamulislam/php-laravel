<?php

namespace App\classes;

class Person
{
    public $message;
    public $firstName,$lastName;

    public function __construct()
    {

        $this->message="hey,\n";
        $this->firstName="Siam";
        $this->lastName="Islam";
    }

    public function index()
    {
        echo $this->message;
    } public function greeting()
    {
        echo $this->message.'&nbsp;&nbsp;&nbsp;'.$this->firstName.'&nbsp;'.$this->lastName.'<br>';
    }
    public function piramid()
    {
//        echo $this->message;
        for($i=0;$i<=10;$i++){
            for($j=0;$j<=$i;$j++){
                echo "*";
            }
            echo "<br/>";
        }
    }
}