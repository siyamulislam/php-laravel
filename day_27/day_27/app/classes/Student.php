<?php


namespace App\classes;


class Student
{
public function publicName(){
    echo "public siam";
}
protected function protectedName(){
    echo "protected siam";
}private function privateName(){
    echo "private siam";
}
}