<?php

namespace App\classes;

class ArrayLoop
{
    public $message;
    private $x = 10, $y = 20, $z = 30;
    public $names=[];

    public function __construct()
    {
        $this->message = "hey,\n";
    }

    public function index()
    {
//        if ($this->x < $this->y){
//            echo "y big";
//        }
//        else echo "x big";


//
//        switch ($this->y){
//            case 5: echo "w";
//            break;
//            case 10: echo "X";
//            break;
//            case 20: echo "Y";
//            break;
//            case 30:echo "Z";
//            break;
//            default: echo "nai";
//        }

//        for ($i = 1; $i <= 100; $i++) {
//            echo $i . ' > siam</br>';
//        }

//        while($this->x < 15){
//            echo $this->x.'</br>';
//            $this->x++;
//        }
//
//        do{
//            echo $this->x.'</br>';
//            $this->x++;
//        }
//        while($this->x < 15);

//        $this->names=['a',24,true,'dd','eee'];
//        foreach ($this->names as $n)echo $n.'</br>';

        $data=['name'=>'Siam',
            'age'=>24,
            'email'=>"siyamul.cse@gmail.com"
            ];
        echo $data['email'].'</br>';

        foreach ($data as $n)echo $n.'</br>';






    }

    public function greeting()
    {
        echo $this->message . '&nbsp;&nbsp;&nbsp;' . '<br>';
    }
}