<?php


namespace App\classes;


class FullName
{
    public $firstName;
    public $lastName;

    public function __construct($post)
    {
        $this->firstName = $post['f_name'];
        $this->lastName = $post['l_name'];
    }

    public function getFullName()
    {
        if($this->lastName==''&&$this->firstName=='')return '';
        else return $this->firstName." ".$this->lastName;
    }
}