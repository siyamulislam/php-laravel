<?php


namespace App\classes;

use App\classes\Example;
use App\classes\Student;
use App\classes\ExampleOne;
use App\classes\Interface2;
class Home extends ExampleOne implements Example,Interface2
{
public function index(){
    header('Location: action.php?page=login');
}

use TraitThree;
public function test(){
    echo 'hello world';
    $this->ex1();
    $this->trait4();
}

public function ex1()
{
    // TODO: Implement ex1() method.
    echo "im ex 1";
}

public function ex3()
{
    echo "dfd";
    $this->ex2();
    // TODO: Implement ex3() method.
}

public function ex4()
{
    // TODO: Implement ex4() method.
}
}