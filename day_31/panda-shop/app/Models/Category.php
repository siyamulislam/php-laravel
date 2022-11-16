<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    public static $categories;

    public static function getAllCategories()
    {
        self::$categories = [
            0 => [
                'id' => 1,
                'name' => 'Electronics',
                'image' => 'category1.jpg'
            ],
            1 => [
                'id' => 2,
                'name' => 'Men Fashion',
                'image' => 'category2.jpg'
            ],
            2 => [
                'id' => 3,
                'name' => 'Women Fashion',
                'image' => 'category3.jpg'
            ],
            3 => [
                'id' => 4,
                'name' => 'Kid Fashion',
                'image' => 'category4.jpg'
            ]
        ];
        return self::$categories;
    }

}
