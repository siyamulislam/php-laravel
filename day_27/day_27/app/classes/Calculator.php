<?php


namespace App\classes;


class Calculator
{
    public $firstNumber;
    public $secondNumber;
    public $action;
    public $result;

    public function __construct($post)
    {
        $this->firstNumber = $post['first_number'];
        $this->secondNumber = $post['second_number'];
        $this->action = $post['action'];
    }

    public function getResult()
    {
        switch ($this->action)
        {
            case '+';
                $this->result = $this->addition();
                break;

            case '-';
                $this->result = $this->subtraction();
                break;

            case '*';
                $this->result = $this->multiplication();
                break;

            case '/';
                $this->result = $this->division();
                break;

            case '%';
                $this->result = $this->reminder();
                break;
            default:
                $this->result = "Please Select your desire action";
        }
        return $this->result;
    }

    public function addition()
    {
        return $this->firstNumber + $this->secondNumber;
    }
    public function subtraction()
    {
        return $this->firstNumber - $this->secondNumber;
    }
    public function multiplication()
    {
        return $this->firstNumber * $this->secondNumber;
    }
    public function division()
    {
        return $this->firstNumber / $this->secondNumber;
    }
    public function reminder()
    {
        return $this->firstNumber % $this->secondNumber;
    }

}

