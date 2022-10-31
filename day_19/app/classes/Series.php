<?php


namespace App\classes;


class series
{

    public $start_number;
    public $end_number;
    public $x;

    public function __construct($post)
    {
        $this->start_number = $post['start_number'];
        $this->end_number = $post['end_number'];
    }

    public function getResult()
    {
        for($x = $this->start_number; $x<=$this->end_number; $x++)
        {
            return $x;
        }
    }
}