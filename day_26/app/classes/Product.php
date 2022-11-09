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
    public $arrayList;
    public $arrayContent;
    public $arrayDetails=[];

    public $categoryProducts = [];

    public function __construct($post=null, $file=null)
    {
        if ($post){
            $this->category_id  = $post['category_id'];
            $this->name         = $post['name'];
            $this->price        = $post['price'];
            $this->description  = $post['description'];
        }
        if ($file){
            $this->image        = $file['image'];
        }
    }

    public function saveProductInfo()
    {
        $this->imageDirectory = $this->uploadImage();

        $this->filePath = 'db/db.txt';
        $this->file = fopen($this->filePath, 'a');
        $this->fileContent = "$this->category_id,$this->name,$this->price,$this->description,$this->imageDirectory$";
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


    public  function getAllProducts(){
        $this->filePath = 'db/db.txt';
        $this->fileContent=file_get_contents($this->filePath);
//        echo "<pre>";
//       print_r(explode('$',rtrim($this->fileContent,'$')));
        $this->arrayList= explode('$',rtrim($this->fileContent,'$'));
        foreach ($this->arrayList as $key=>$value){
//            echo $value.'<br>';
            $this->arrayContent=explode(",",$value);
//            array_push($this->arrayDetails,$this->arrayContent);
//echo $key;
            if($this->arrayContent[0]){
                $this->arrayDetails[$key]['category_id']=$this->arrayContent[0];
                $this->arrayDetails[$key]['name']=$this->arrayContent[1];
                $this->arrayDetails[$key]['price']=$this->arrayContent[2];
                $this->arrayDetails[$key]['description']=$this->arrayContent[3];
                $this->arrayDetails[$key]['image']=$this->arrayContent[4];
            }
        }
//        echo "<pre>";
//        print_r($this->arrayDetails);
return $this->arrayDetails;
    }



    public function getProductsByCategory($categoryId)
    {
        $this->arrayDetails=$this->getAllProducts();
        foreach ($this->arrayDetails as $product)
        {
            if($product['category_id'] == $categoryId)
            {
                array_push($this->categoryProducts, $product);
            }
        }
      return $this->categoryProducts;
    }

    public function getProductById($productId)
    {
        $this->arrayDetails=$this->getAllProducts();
        foreach ($this->arrayDetails as $product)
        {
            if($product['price'] == $productId)
            {
                return $product;
            }
        }
    }
}

