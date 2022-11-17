<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public static $product;
    protected $fillable=['name','price','description','image'];

    public static function createProduct($req){
//        self::$product =new Product();
//        self::$product->name=$req->name;
//        self::$product->price=$req->price;
//        self::$product->description=$req->description;
//        self::$product->image=$req->image;
//        self::$product->save();
        Product::create([
            'name'=>$req->name,
            'price'=>$req->price,
            'description'=>$req->description,
            'image'=>$req->image,
        ]);
    }

}
