<?php


namespace App\classes;


class Student
{
//    public $name2 = 'Siam Islam';
//
//    public function one()
//    {
//        echo 'Mr Siam, from public';
//    }
//
//    protected function two()
//    {
//        echo 'im from protected';
//    }
//
//    private function three()
//    {
//        echo 'im from private';
//    }

    public $student;
    public $category_id, $name, $email, $phone, $address, $image;
    public $imageName,$imageDirectory;

    public function __construct($post,$file)
    {
        $this->category_id  = $post['category_id'];
        $this->name         = $post['name'];
        $this->email        = $post['email'];
        $this->phone        = $post['phone'];
        $this->address      = $post['address'];
        $this->image        = $file['image'];
    } 
    
    public function saveStudentInfo()
    {
//        echo $this->image;
//        echo "dfd";
        $this->imageName=time().$this->image['name'];
        $this->imageDirectory = 'assets/img/upload'.$this->imageName;
        move_uploaded_file($this->image['temp_name'],$this->imageDirectory);
        echo "success";
    }
}