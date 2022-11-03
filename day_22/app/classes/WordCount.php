<?php


namespace App\classes;


class WordCount
{
    public $inputStrings;
    private $resultData;

    public function __construct($post)
    {
        $this->inputStrings = $post['wordsData'];
    }

    public function getCountedStrings()
    {
        $words=str_word_count($this->inputStrings);
        $chars=strlen($this->inputStrings);

//        $this->resultData=[
//            'totalWord'=>$words,
//            'totalChar'=>$chars,
//            'inputString'=>$this->inputStrings
//        ];
//        return $this->resultData;

        if($chars<0) return '';
         else return "Words :".$words." | ".'Characters : '.$chars;
    }
}