<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public static $category,$image,$imageUrl,$directory,$imageName;
    protected $fillable=['name','description','status','image'];

    public static function getImageUrl($req){
        self::$image=$req->file('image');
        self::$imageName=self::$image->getClientOriginalName();
        self::$directory="res/category-image/";
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function createCategory($req){
        self::$category=new Category();
        self::$category->name=$req->name;
        self::$category->description=$req->description;
        self::$category->status=$req->status;
        self::$category->image=self::getImageUrl($req);
        self::$category->save();
    }



    public static function updateCategory($req, $id){
        self::$category=Category::find($id);
        if ($req->file('image')){
            if (file_exists(self::$category->image)){
                unlink(self::$category->image);
            }
            self::$imageUrl=self::getImageUrl($req);
        }
        else{
            self::$imageUrl=self::$category->image;
        }
        self::$category->name=$req->name;
        self::$category->description=$req->description;
        self::$category->image=self::$imageUrl;
        self::$category->save();
    }
    public static function deleteCategory( $id){
        self::$category=Category::find($id);
        if (file_exists(self::$category->image)){
            unlink(self::$category->image);
        }

        self::$category->delete();
    }

}
