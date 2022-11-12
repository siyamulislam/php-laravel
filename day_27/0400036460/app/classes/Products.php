<?php


namespace App\classes;


class Products
{
    public $product;
    public $product_id;
    public $category_id;
    public $brand_id;
    public $name;
    public $price;
    public $description;

    public $image;
    public $imageName;
    public $imageDirectory;

    public $file;
    public $filePath;
    public $fileContent;
    public $productList;
    public $productContent;
    public $productDetails=[];
    public $lastProductID=0;

    public $categoryProducts = [];

    public function __construct($post=null, $file=null)
    {
        if ($post){
            $this->product_id  = $post['product_id'];
            $this->category_id  = $post['category_id'];
            $this->brand_id  = $post['brand_id'];
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

        $this->filePath = 'assets/db/product.txt';
        $this->file = fopen($this->filePath, 'a');
        $this->fileContent = "$this->product_id,-^-,$this->category_id,-^-,$this->brand_id,-^-,$this->name,-^-,$this->price,-^-,$this->description,-^-,$this->imageDirectory$-^-$"."\n";
        fwrite($this->file, $this->fileContent);
        fclose($this->file);
        return "product Saved Successfully";
    }

    public function uploadImage()
    {
        $this->imageName = time() . '-' . rand(1000, 9999) . '_' . $this->image['name'];
        $this->imageDirectory = 'assets/img/upload/product/' . $this->imageName;
        move_uploaded_file($this->image['tmp_name'], $this->imageDirectory);
        return $this->imageDirectory;
    }


    public  function getAllProducts(){
        $this->filePath = 'assets/db/product.txt';
        $this->fileContent=file_get_contents($this->filePath);
        $this->productList= explode('$-^-$'."\n",rtrim($this->fileContent,'$-^-$'."\n"));
        foreach ($this->productList as $key=> $value){
            $this->productContent=explode(",-^-,",$value);
            if($this->productContent[0]){
                $this->productDetails[$key]['product_id']=$this->productContent[0];
                $this->productDetails[$key]['category_id']=$this->productContent[1];
                $this->productDetails[$key]['brand_id']=$this->productContent[2];
                $this->productDetails[$key]['name']=$this->productContent[3];
                $this->productDetails[$key]['price']=$this->productContent[4];
                $this->productDetails[$key]['description']=$this->productContent[5];
                $this->productDetails[$key]['image']=$this->productContent[6];
            }
        }
return $this->productDetails;
    }



    public function getProductsByCategory($categoryId)
    {
        $this->productDetails=$this->getAllProducts();
        foreach ($this->productDetails as $product)
        {
            if($product['category_id'] == $categoryId)
            {
                array_push($this->categoryProducts, $product);
            }
        }
      return $this->categoryProducts;
    }

    public function getProductByID($productId)
    {
        $this->productDetails=$this->getAllProducts();
        echo $productId;
//        echo "<pre>";
//        print_r($this->productDetails);
        foreach ($this->productDetails as $product)
        {
            if($product['product_id'] == $productId)
            {
                return $product;
            }
        }
    }

    public  function getLastProductID(){
        $this->filePath = 'assets/db/product.txt';
        $this->fileContent=file_get_contents($this->filePath);
        $this->productList= explode('$-^-$'."\n",rtrim($this->fileContent,'$-^-$'."\n"));
        foreach ($this->productList as $key=> $value){
            $this->productContent=explode(",-^-,",$value);
            if($this->productContent[0]){
                $this->lastProductID= $this->productContent[0];
            }
        }
        return $this->lastProductID;
    }
}

