<?php


namespace App\classes;


class WordCount
{
    public $words;

    public function __construct($post)
    {
        $this->words = $post['wordsData'];
    }

    public function getWords()
    {
        $words=str_word_count($this->words);
        $length=strlen($this->words);

         return "Words :".$words." | ".'Character : '.$length;
    }
}