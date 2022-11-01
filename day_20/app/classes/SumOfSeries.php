<?php


namespace App\classes;


class SumOfSeries
{
    public $startingNumber, $endingNumber, $result, $series;

    public function __construct($post)
    {
        $this->startingNumber = $post['start_number'];
        $this->endingNumber = $post['end_number'];
    }

    public function getResult()
    {
        if($this->startingNumber > $this->endingNumber)
        {
            $this->result = $this->getBigToSmallSeries();
        }
        elseif($this->startingNumber < $this->endingNumber)
        {
            $this->result = $this->getSmallToSeries();
        }

        return $this->result;
    }


    public function getBigToSmallSeries()
    {
        $this->result = 0;
        for($this->startingNumber; $this->startingNumber >= $this->endingNumber; $this->startingNumber--)
        {
            $this->series .= $this->startingNumber.' + ';
            $this->result += $this->startingNumber;
        }
        return rtrim($this->series, " + ").' = '.$this->result;
    }


    public function getSmallToSeries()
    {
        $this->result = 0;
        for($this->startingNumber; $this->startingNumber <= $this->endingNumber; $this->startingNumber++)
        {
            $this->series .= $this->startingNumber.' + ';
            $this->result += $this->startingNumber;
        }
        return rtrim($this->series, " + ").' = '.$this->result;
    }

}