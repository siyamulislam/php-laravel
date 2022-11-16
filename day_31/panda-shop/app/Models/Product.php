<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    public static $products;

    public static function products()
    {
//        echo self::$products;
        self::$products = [
            0 => [
                'id' => 1,
                'name' => 'Redmi K20 Pro',
                'price' => '49000',
                'description' => 'Xiaomi Redmi K20 Price in Bangladesh (BDT 49,999). This smartphone comes 4G Networks, (6GB, 8GB) RAM and (64GB, 128GB, 256GB) ROM, 6.39 inches AMOLED Display, (48MP+13MP+8MP) Triple Rear and 20MP Selfie Camera, Android 9.0 (Pie), Octa core CPU, 4000 mAh Li-Po Battery.',
                'image' => 'product1.jpg',
            ],
            1 => [
                'id' => 2,
                'name' => 'Redmi Note 11',
                'price' => '38000',
                'description' => 'The Redmi Note 11s (elevens), many as they may be, do tend to keep to a certain common aesthetic. At least the bulk of earlier ones, that is - the 11E and the just announced 11T and 11T Pro (yes, they keep coming) tend to feature a different camera styling. But let\'s focus on the 11S 5G we have here. The Redmi Note 11s (elevens), many as they may be, do tend to keep to a certain common aesthetic. At least the bulk of earlier ones, that is - the 11E and the just announced 11T and 11T Pro.',
                'image' => 'product2.jpg',
            ],
            2 => [
                'id' => 3,
                'name' => 'MI Notebook Pro',
                'price' => '120000',
                'description' => 'This is MI Note Book Pro Core i7 512GB SD  16 GB RamProcessor Intel Core i7-8550U Processor (8M Cache, 1.80 GHz up to 4.00 GHz) Display 15.6 FHD(1920 x 1080) Display Memory 8GB 2400MHz DDR4 RAM Storage 256GB PCI-E SSD Graphics NVIDIA GeForce MX150 with 2GB DDR5 Graphics Operating System Windows 10 Home Battery 4 cell lithium polymer battery Audio Built-in Dual Speakers,Dolby Audio',
                'image' => 'product3.jpg',
            ],
            3 => [
                'id' => 4,
                'name' => 'MI Band 7',
                'price' => '2250',
                'description' => 'Display 1.62 inch AMOLED Touch Display Resolution: 192 x 490 pixels，326 PPI Brightness: up to 500 nits, adjustable Tempered glass with anti-fingerprint coating Band faces:100+ Battery Charging type: magnetic charging Charging time: ≤2 hours Typical use time: ≥14 days Capacity: 180mAh Connectivity 5.2 BLE Material Strap Material: TPU Strap buckle: aluminium alloy OS Android 6.0 or higher, iOS 10 or higher SpecialFeatures Fitness: 110+ fitness modes 5 auto detection modes: outdoor running, walking, treadmill, rowing machine, elliptical Other features VO 2 max Training effect Training load Recovery duration Health: Heart rate monitoring SpO 2 tracking Sleep tracking (deep sleep, light sleep, ',
                'image' => 'product4.jpg',
            ],
        ];
        return self::$products;
    }

    public static function getProductById($id)
    {
        self::$products = self::products();
        foreach (self::$products as $product)
        {
            if($product['id'] == $id)
            {
                return $product;
            }
        }
    }
}
