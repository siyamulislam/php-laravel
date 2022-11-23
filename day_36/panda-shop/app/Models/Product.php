<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public static $product,$image,$imageUrl,$directory,$imageName;
    protected $fillable=['category_id','brand_id','title','price','code','description','image'];
    public static function getImageUrl($req){
        self::$image=$req->file('image');
        self::$imageName = time().'_'.self::$image->getClientOriginalName();
        self::$directory="product-image/";
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function addProduct($req){
        self::$product=new Product();
        self::$product->category_id=$req->category_id;
        self::$product->brand_id=$req->brand_id;
        self::$product->title=$req->title;
        self::$product->price=$req->price;
        self::$product->code=$req->code;
        self::$product->description=$req->description;
        self::$product->image=self::getImageUrl($req);
        self::$product->save();
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
        self::$product->category_id=$req->category_id;
        self::$product->brand_id=$req->brand_id;
        self::$product->title=$req->title;
        self::$product->price=$req->price;
        self::$product->code=$req->code;
        self::$product->description=$req->description;
        self::$product->image=self::$imageUrl;
        self::$product->save();
    }
    public static function deleteProduct( $id){
        self::$product=Product::find($id);
        if (file_exists(self::$product->image)){
            unlink(self::$product->image);
        }

        self::$product->delete();
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
}
