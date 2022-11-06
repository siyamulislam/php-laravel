<?php


namespace App\classes;


class Student
{

    public $category_id, $name, $email, $phone, $address, $image;
    public $imageName, $imageDirectory;

    public function __construct($post, $file)
    {
        $this->category_id = $post['category_id'];
        $this->name = $post['name'];
        $this->email = $post['email'];
        $this->phone = $post['phone'];
        $this->address = $post['address'];
        $this->image = $file['image'];
    }

    public function saveStudentInfo()
    {
//        echo "<PRE>";
//        print_r($this->image);

        $this->imageName = time() . $this->image['name'];

        $this->imageDirectory = 'assets/img/uploads/' . $this->imageName;
        move_uploaded_file($this->image['tmp_name'], $this->imageDirectory);

        echo "success";
    }
}