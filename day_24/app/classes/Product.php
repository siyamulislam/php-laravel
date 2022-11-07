<?php


namespace App\classes;


class Product
{
    public $product;
    public $category_id;
    public $name;
    public $price;
    public $description;
    public $image;
    public $imageName;
    public $imageDirectory;

    public function __construct( $post ,$file)
    {
        $this->category_id=   $post['category_id'];
        $this->name=          $post['name'];
        $this->price=         $post['price'];
        $this->description=   $post['description'];
        $this->image=         $file['image'];
    }

    public function saveProductInfo(){

//        $this->imageName=time().'_'.$this->image['name'];
        $this->imageName=$this->image['name'];
        $this->imageDirectory = 'assets/img/upload/' . $this->imageName;
        move_uploaded_file($this->image['tmp_name'], $this->imageDirectory);
        echo "saved";
    }

}