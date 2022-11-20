<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public static $product,$image,$imageUrl,$directory,$imageName;
    protected $fillable=['name','price','description','image'];

    public static function getImageUrl($req){
        self::$image=$req->file('image');
        self::$imageName=self::$image->getClientOriginalName();
        self::$directory="product-image/";
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function createProduct($req){

        self::$product =new Product();
        self::$product->name=$req->name;
        self::$product->price=$req->price;
        self::$product->description=$req->description;
        self::$product->image=self::getImageUrl($req);
        self::$product->save();

//        Product::create([
//            'name'=>$req->name,
//            'price'=>$req->price,
//            'description'=>$req->description,
//            'image'=>$req->image,
//        ]);

//        Product::create($req->all());
    }

    public static function updateProduct($req, $id){
        self::$product=Product::find($id);
        if ($req->file('image')){
            if (file_exists(self::$product->image)){
                unlink(self::$product->image);
            }
            self::$imageUrl=self::getImageUrl($req);
        }
        else{
            self::$imageUrl=self::$product->image;
        }
        self::$product->name=$req->name;
        self::$product->price=$req->price;
        self::$product->description=$req->description;
        self::$product->image=self::getImageUrl($req);
        self::$product->save();
    }
    public static function deleteProduct( $id){
        self::$product=Product::find($id);
            if (file_exists(self::$product->image)){
                unlink(self::$product->image);
            }

        self::$product->delete();
    }

}
