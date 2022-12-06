<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    public static $brand,$image,$imageUrl,$directory,$imageName;
    protected $fillable=['name','description','status','image'];

    public static function getImageUrl($req){
        self::$image=$req->file('image');
        self::$imageName=time().'_'.self::$image->getClientOriginalName();
        self::$directory="res/img/brand/";
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function createBrand($req){
        self::$brand=new Brand();
        self::$brand->name=$req->name;
        self::$brand->description=$req->description;
        self::$brand->status=$req->status;
        self::$brand->image=self::getImageUrl($req);
        self::$brand->save();
    }



    public static function updateBrand($req, $id){
        self::$brand=Brand::find($id);
        if ($req->file('image')){
            if (file_exists(self::$brand->image)){
                unlink(self::$brand->image);
            }
            self::$imageUrl=self::getImageUrl($req);
        }
        else{
            self::$imageUrl=self::$brand->image;
        }
        self::$brand->name=$req->name;
        self::$brand->description=$req->description;
        self::$brand->status=$req->status;
        self::$brand->image=self::$imageUrl;
        self::$brand->save();
    }
    public static function deleteBrand( $id){
        self::$brand=Brand::find($id);
        if (file_exists(self::$brand->image)){
            unlink(self::$brand->image);
        }

        self::$brand->delete();
    }
}
