<?php


namespace App\classes;


class Auth
{
    private $email = "admin@gmail.com", $password = "0";
    private $userEmail, $userPassword;

    public function __construct($post=null)
    {
        $this->userEmail = $post['email'];
        $this->userPassword = $post['password'];
    }

    public function login()
    {
        if ($this->userPassword === $this->password && $this->userEmail === $this->email) {
            session_start();
//        $_SESSION['id']=session_id();
            $_SESSION['id'] = 'siam';
//        exit();
            header("Location: action.php?page=home");
        }
        return "Email/Password is invalid!";
    }
    public function logout()
    {
        session_start();
//        session_destroy();
        if (isset($_SESSION)){
            unset($_SESSION['id']);
        }
            header("Location: action.php?page=login");
    }
}