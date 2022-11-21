<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public static $blog,$image,$imageUrl,$directory,$imageName;
    protected $fillable=['name','description','image'];
    public static function getImageUrl($req){
        self::$image=$req->file('image');
        self::$imageName=self::$image->getClientOriginalName();
        self::$directory="blog-image/";
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function addBlog($req){
        self::$blog=new Blog();
        self::$blog->name=$req->name;
        self::$blog->description=$req->description;
        self::$blog->image=self::getImageUrl($req);
        self::$blog->save();
    }



    public static function updateBlog($req, $id){
        self::$blog=Blog::find($id);
        if ($req->file('image')){
            if (file_exists(self::$blog->image)){
                unlink(self::$blog->image);
            }
            self::$imageUrl=self::getImageUrl($req);
        }
        else{
            self::$imageUrl=self::$blog->image;
        }
        self::$blog->name=$req->name;
        self::$blog->description=$req->description;
        self::$blog->image=self::$imageUrl;
        self::$blog->save();
    }
    public static function deleteBlog( $id){
        self::$blog=Blog::find($id);
        if (file_exists(self::$blog->image)){
            unlink(self::$blog->image);
        }

        self::$blog->delete();
    }
}
