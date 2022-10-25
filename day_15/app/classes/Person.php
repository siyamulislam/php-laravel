<?php

namespace App\classes;

class Person
{
    public $message;
    public $firstName, $lastName;
    public $x=10,$y=20,$z=30,$w='20';

    public function __construct()
    {

        $this->message = "hey,\n";
        $this->firstName = "Siam";
        $this->lastName = "Islam";
    }

    public function index()
    {
        $city="dhaka";
//        echo $city;
//        echo $this->x.'</br>';
//        echo $this->x+$this->y   .'</br>';
//        echo $this->x+$this->y*$this->z   .'</br>';
//
//        echo  "y=".$this->x."</br>";
//        echo $this->x++ ."</br>";
//        echo $this->x++ ."</br>";
//        echo ++$this->x ."</br>";

//        echo  "Y=".$this->y."</br>";
//        echo $this->y-- ."</br>";
//        echo --$this->y ."</br>";
//        echo $this->y-- ."</br>";
//        echo $this->y-- ."</br>";
//        echo $this->y ."</br>";

// echo  "Y=".$this->y."</br>";
//        echo $this->y-- ."</br>";
//        echo $this->y-- ."</br>";
//        echo ++$this->y ."</br>";
//        echo $this->y++ ."</br>";
//        echo ++$this->y ."</br>";
//        echo $this->y-- ."</br>";
//        echo ++$this->y ."</br>";
//        echo $this->y-- ."</br>";
//        echo $this->y ."</br>";


//        echo '</br>'.$this->x+=$this->y;
//        echo '</br>'.$this->x-=$this->y;
//        echo '</br>'.$this->x*=$this->y;
//        echo '</br>'.$this->x/=$this->y;
//        echo '</br>'.$this->x%=$this->y;

//
//        echo '</br>';
//        echo $this->x > $this->y;
//        echo '</br>';
//        echo $this->x <= $this->y;

//         echo '</br>';
//        echo $this->x = $this->y;
//
//         echo '</br>';
//        echo $this->x != $this->y;

//        echo '</br>';
//        echo gettype($this->y);

//        echo '</br>';
//        echo $this->w == $this->y;
//        echo $this->w === $this->y;


//        echo $this->w !== $this->y;
//        echo '</br>';

//        echo ($this->x < $this->y)&&($this->y < $this->z);
//        echo '</br>';
//        echo ($this->x > $this->y)&&($this->y > $this->z);
//        echo '</br>';
//        echo ($this->x < $this->y)&&($this->y > $this->z);
//        echo '</br>';
//        echo ($this->x > $this->y)&&($this->y < $this->z);
//        echo '</br>';

//        echo ($this->x < $this->y)||($this->y < $this->z);
//        echo '</br>';
//        echo ($this->x > $this->y)||($this->y > $this->z);
//        echo '</br>';
//        echo ($this->x < $this->y)||($this->y > $this->z);
//        echo '</br>';
//        echo ($this->x > $this->y)||($this->y < $this->z);
//        echo '</br>';


        echo $this->x=false;
        echo '</br>';
        echo ! $this->x;









//        exit();// terminate whole code
//        echo $this->message;

    }

    public function greeting()
    {
        echo $this->message . '&nbsp;&nbsp;&nbsp;' . $this->firstName . '&nbsp;' . $this->lastName . '<br>';
    }

    public function pyramid()
    {
//        echo $this->message;
        for ($i = 0; $i <= 10; $i++) {
            for ($j = 0; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br/>";
        }
    }
}