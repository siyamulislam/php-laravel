<?php

namespace App\classes;

class ArrayLoop
{
    public $message;
    private $x = 10, $y = 20, $z = 30;
    public $names = [];

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

//        $data=[
//            'name'=>'Siam',
//            'age'=>24,
//            'email'=>"siyamul.cse@gmail.com"
//            ];
//        echo $data['email'].'</br>';
//
//        foreach ($data as $n)echo $n.'</br>';

        $data0 = [
            'r1' => [
                'name' => 'Siam',
                'age' => 24,
                'email' => "siyamul.cse@gmail.com"
            ],
            'r10' => [
                'name' => 'Jhu',
                'age' => 22,
                'email' => "jhu.cse@gmail.com"
            ],
            'r100' => [
                'name' => 'Deo',
                'age' => 45,
                'email' => "deo.cse@gmail.com"
            ],
        ];
        $data = [
            [
                'name' => 'Siam',
                'age' => 24,
                'email' => "siyamul.cse@gmail.com"
            ],
            [
                'name' => 'Jhu',
                'age' => 22,
                'email' => "jhu.cse@gmail.com"
            ],
            [
                'name' => 'Deo',
                'age' => 45,
                'email' => "deo.cse@gmail.com"
            ],
        ];
        echo $data0['r100']['name'] . '</br>';
        echo $data[1]['email'] . '</br>';

        foreach ($data as $n) {
            echo '</br>';
            foreach ($n as $nn) echo $nn . '</br>';
        }
        echo '</br>';
        foreach ($data as $n) {
            echo $n['name'] . '</br>';
        }


    }

    public function greeting()
    {
        echo $this->message . '&nbsp;&nbsp;&nbsp;' . '<br>';
    }
}