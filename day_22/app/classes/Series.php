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
        if($this->start_number <= $this->end_number)
        {
            for ($this->start_number; $this->start_number <= $this->end_number; $this->start_number++) {
                $this->x .= $this->start_number . ", ";
            }
//            return $this->x;
            return rtrim($this->x,', ');
        }
        else
        {
            for ($this->start_number; $this->start_number >= $this->end_number; $this->start_number--) {
                $this->x .= $this->start_number . ", ";
            }
//            return $this->x;
            return rtrim($this->x,', ');
        }
    }
}