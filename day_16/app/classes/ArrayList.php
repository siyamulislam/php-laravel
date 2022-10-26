<?php

namespace App\classes;

class ArrayList
{
    public $message;

    public function __construct()
    {
        $this->message = "hey,\n";
    }

    public function index()
    {
    }

    public function greeting()
    {
        echo $this->message . '&nbsp;&nbsp;&nbsp;' . '<br>';
    }
}