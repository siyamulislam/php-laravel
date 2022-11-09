<?php


namespace App\classes;


class Auth
{
private $email="admin@gmail.com",$password="000000";
private $userEmail,$userPassword;

public function __construct($post)
{
    $this->userEmail=$_POST['email'];
    $this->userPassword=$_POST['password'];
}
public function login(){
    if ($this->userPassword===$this->password && $this->userEmail===$this->email){
        return "success";
    }
   else return "Email/Password is invalid!";
}
}