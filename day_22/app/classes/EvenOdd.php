<?php


namespace App\classes;


class EvenOdd
{
    public $getNUmber,$endNumber,$action, $result;

    public function __construct($post)
    {
        $this->startNumber = $post['start_number'];
        $this->endNumber = $post['end_number'];
        $this->action = $post['action'];
    }

    public function getResult()
    {
        switch ($this->action)
        {
            case 'even';
            $this->result = $this->evenNumber();
            break;

            case 'odd';
            $this->result = $this->oddNumber();
            break;

            default:
                $this->result = "Please Select your desire action";
        }
        return $this->result;
    }

    public function evenNumber()
    {

        for($this->startNumber; $this->startNumber <= $this->endNumber; $this->startNumber++)
        {
            if($this->startNumber%2==0)
            {
               $this->result .= $this->startNumber. ' ';
            }
        }

        return $this->result;
    }

    public function oddNumber()
    {
        for($this->startNumber; $this->startNumber <= $this->endNumber; $this->startNumber++)
        {
            if($this->startNumber%2!=0)
            {
                $this->result .= $this->startNumber. ' ';
            }
        }

        return $this->result;
    }
}