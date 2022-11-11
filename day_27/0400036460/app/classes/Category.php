<?php


namespace App\classes;


class Category
{
    public $category_id;
    public $name;
    public $image;

    public $imageName;
    public $imageDirectory;

    public $file;
    public $filePath;
    public $fileContent;
    public $categoryList;
    public $categoryContent;
    public $categoryDetails=[];

    public $lastCategoryID=0;


    public function __construct($post=null, $file=null)
    {
        if ($post){
            $this->category_id     = $post['category_id'];
            $this->name         = $post['name'];
        }
        if ($file){
            $this->image        = $file['image'];
        }
    }

    public function saveCategoryInfo()
    {
        $this->imageDirectory = $this->uploadImage();

        $this->filePath = 'assets/db/category.txt';
        $this->file = fopen($this->filePath, 'a');
        $this->fileContent = "$this->category_id,$this->name,$this->imageDirectory$";
        fwrite($this->file, $this->fileContent);
        fclose($this->file);
//        return header("Location: action.php?page=add-brand");
        return "Category Saved Successfully";
    }

    public function uploadImage()
    {
        $this->imageName = time() . '-' . rand(1000, 9999) . '_' . $this->image['name'];
        $this->imageDirectory = 'assets/img/upload/category/' . $this->imageName;
        move_uploaded_file($this->image['tmp_name'], $this->imageDirectory);
        return $this->imageDirectory;
    }
    public  function getAllCategory(){
        $this->filePath = 'assets/db/category.txt';
        $this->fileContent=file_get_contents($this->filePath);
        $this->categoryList= explode('$',rtrim($this->fileContent,'$'));
        foreach ($this->categoryList as $key=> $value){
            $this->categoryContent=explode(",",$value);
            if($this->categoryContent[0]){
                $this->categoryDetails[$key]['category_id']=$this->categoryContent[0];
                $this->categoryDetails[$key]['name']=$this->categoryContent[1];
                $this->categoryDetails[$key]['image']=$this->categoryContent[2];
            }
        }
        return $this->categoryDetails;
    }

    public  function getLastCategoryID(){
        $this->filePath = 'assets/db/category.txt';
        $this->fileContent=file_get_contents($this->filePath);
        $this->categoryList= explode('$',rtrim($this->fileContent,'$'));
        foreach ($this->categoryList as $key=> $value){
            $this->categoryContent=explode(",",$value);
            if($this->categoryContent[0]){
        $this->lastCategoryID= $this->categoryContent[0];
            }
        }
        return $this->lastCategoryID;
    }



}