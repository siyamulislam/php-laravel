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
    public $imagePath;
    public $imageName;
    public $imageDirectory;

    public $file;
    public $filePath;
    public $fileContent;

    public function __construct($post, $file)
    {
        $this->category_id  = $post['category_id'];
        $this->name         = $post['name'];
        $this->price        = $post['price'];
        $this->description  = $post['description'];
        $this->image        = $file['image'];
    }

    public function saveProductInfo()
    {


        $this->imageDirectory = $this->uploadImage();

        $this->filePath = 'db/db.txt';
        $this->file = fopen($this->filePath, 'a');
        $this->fileContent = "$this->category_id,$this->name,$this->price,$this->description,$this->imageDirectory";
        fwrite($this->file, $this->fileContent);
        fclose($this->file);
        return "data Saved Successfully";
    }

    public function uploadImage()
    {
        //      $this->imageName=$this->image['name'];
//        $this->imageName=time().'_'.$this->image['name'];
        $this->imageName = time() . '-' . rand(1000, 9999) . '_' . $this->image['name'];
        $this->imageDirectory = 'assets/img/upload/' . $this->imageName;
        move_uploaded_file($this->image['tmp_name'], $this->imageDirectory);
        return $this->imageDirectory;
    }

}