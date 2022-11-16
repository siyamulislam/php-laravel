<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;


    public static $brands;

    public static function getAllBrands()
    {
        self::$brands = [
            0 => [
                'id' => 1,
                'name' => 'Xiaomi',
                'image' => 'brand1.jpg'
            ],
            1 => [
                'id' => 2,
                'name' => 'Denim',
                'image' => 'brand2.png'
            ],
            2 => [
                'id' => 3,
                'name' => 'Gucci',
                'image' => 'brand3.jpg'
            ],
            3 => [
                'id' => 4,
                'name' => 'Samsung',
                'image' => 'brand4.jpg'
            ]
        ];
        return self::$brands;
    }

}
