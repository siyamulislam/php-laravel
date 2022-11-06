<?php


namespace App\classes;


class Home extends Student



{
    public $name='Mr. Siam';
    protected $email='damu@mail.com';
    private $password;
    public function  name(){
//        echo 'Siam';
//        echo $this->email();
//        $this->one();
        $this->two();
    }
    protected function  email(){
        echo 'siyamul@gmail.com';
    }
    private function  password(){
        echo '#12345$$';
    }
    public function index()
    {
         header('Location: action.php?page=home');

    }
}