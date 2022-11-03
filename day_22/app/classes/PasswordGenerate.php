<?php


namespace App\classes;


class PasswordGenerate
{
    public $length;
    public $i;
    public $result;
    public $key;
    public $maxLength;
    public $passwordData=[];

    public function __construct($post)
    {
        $this->length = $post['length_number'];
        $this->i = 0;
        $this->passwordData = ['1','!','a','A','$','%','*','&','^','B','#'];
        $this->maxLength = count($this->passwordData) - 1 ;
    }

    public function newPassword()
    {
        for ($this->i; $this->i < $this->length; $this->i++)
        {
            $this->key = rand(0, $this->maxLength);
            $this->result .= $this->passwordData[$this->key];
        }
        return $this->result;
    }
}