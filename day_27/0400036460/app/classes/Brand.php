<?php


namespace App\classes;


class Brand
{
    public $brand_id;
    public $name;
    public $image;

    public $imageName;
    public $imageDirectory;

    public $file;
    public $filePath;
    public $fileContent;
    public $brandList;
    public $brandContent;
    public $brandDetails=[];

    public $lastBrandID=0;
    public $categoryProducts = [];



    public function __construct($post=null, $file=null)
    {
        if ($post){
            $this->brand_id     = $post['brand_id'];
            $this->name         = $post['name'];
        }
        if ($file){
            $this->image        = $file['image'];
        }
    }

    public function saveBrandInfo()
    {
        $this->imageDirectory = $this->uploadImage();

        $this->filePath = 'assets/db/brand.txt';
        $this->file = fopen($this->filePath, 'a');
        $this->fileContent = "$this->brand_id,$this->name,$this->imageDirectory$";
        fwrite($this->file, $this->fileContent);
        fclose($this->file);
//        return header("Location: action.php?page=add-brand");
        return "Brand Saved Successfully";
    }

    public function uploadImage()
    {
        $this->imageName = time() . '-' . rand(1000, 9999) . '_' . $this->image['name'];
        $this->imageDirectory = 'assets/img/upload/brand/' . $this->imageName;
        move_uploaded_file($this->image['tmp_name'], $this->imageDirectory);
        return $this->imageDirectory;
    }
    public  function getAllBrand(){
        $this->filePath = 'assets/db/brand.txt';
        $this->fileContent=file_get_contents($this->filePath);
        $this->brandList= explode('$',rtrim($this->fileContent,'$'));
        foreach ($this->brandList as $key=> $value){
            $this->brandContent=explode(",",$value);
            if($this->brandContent[0]){
                $this->brandDetails[$key]['brand_id']=$this->brandContent[0];
                $this->brandDetails[$key]['name']=$this->brandContent[1];
                $this->brandDetails[$key]['image']=$this->brandContent[2];
            }
        }
        return $this->brandDetails;
    }

    public  function getLastBrandID(){
        $this->filePath = 'assets/db/brand.txt';
        $this->fileContent=file_get_contents($this->filePath);
        $this->brandList= explode('$',rtrim($this->fileContent,'$'));
        foreach ($this->brandList as $key=> $value){
            $this->brandContent=explode(",",$value);
            if($this->brandContent[0]){
        $this->lastBrandID= $this->brandContent[0];
            }
        }
        return $this->lastBrandID;
    }








}