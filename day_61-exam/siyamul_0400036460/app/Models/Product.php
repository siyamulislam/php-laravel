<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static $image,$imageName,$imageUrl,$directory,$product,$message;

    private static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'products-image/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function productStore($request)
    {
        self::$product                  = new Product();
        self::$product->name            = $request->name;
        self::$product->category_name   = $request->category_name;
        self::$product->brand_name      = $request->brand_name;
        self::$product->description     = $request->description;
        self::$product->image           = self::getImageUrl($request);
        self::$product->status          = $request->status;
        self::$product->save();
    }

    public static function productUpdate($request, $id)
    {
        self::$product = Product::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$product->image))
            {
                unlink(self::$product->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$product->image;
        }
        self::$product->name            = $request->name;
        self::$product->category_name   = $request->category_name;
        self::$product->brand_name      = $request->brand_name;
        self::$product->description     = $request->description;
        self::$product->image           = self::$imageUrl;
        self::$product->status          = $request->status;
        self::$product->save();
    }

    public static function productDelete($id)
    {
        self::$product = Product::find($id);
        if(file_exists(self::$product->image))
        {
            unlink(self::$product->image);
        }
        self::$product->delete();
    }
}
