<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    public static $products;
    public static $brandProducts = [];

    public static function products()
    {
//        echo self::$products;
        self::$products = [
            0 => [
                'product_id' => 1,
                'brand_id' => 1,
                'Category_id' => 1,
                'name' => 'Redmi K20 Pro',
                'price' => '49000',
                'description' => 'Xiaomi Redmi K20 Price in Bangladesh (BDT 49,999). This smartphone comes 4G Networks, (6GB, 8GB) RAM and (64GB, 128GB, 256GB) ROM, 6.39 inches AMOLED Display, (48MP+13MP+8MP) Triple Rear and 20MP Selfie Camera, Android 9.0 (Pie), Octa core CPU, 4000 mAh Li-Po Battery.',
                'image' => 'product1.jpg',
            ],
            1 => [
                'product_id' => 2,
                'brand_id' => 1,
                'Category_id' => 1,
                'name' => 'Redmi Note 11',
                'price' => '38000',
                'description' => 'The Redmi Note 11s (elevens), many as they may be, do tend to keep to a certain common aesthetic. At least the bulk of earlier ones, that is - the 11E and the just announced 11T and 11T Pro (yes, they keep coming) tend to feature a different camera styling. But let\'s focus on the 11S 5G we have here. The Redmi Note 11s (elevens), many as they may be, do tend to keep to a certain common aesthetic. At least the bulk of earlier ones, that is - the 11E and the just announced 11T and 11T Pro.',
                'image' => 'product2.jpg',
            ],
            2 => [
                'product_id' => 3,
                'brand_id' => 1,
                'Category_id' => 1,
                'name' => 'MI Notebook Pro',
                'price' => '120000',
                'description' => 'This is MI Note Book Pro Core i7 512GB SD  16 GB RamProcessor Intel Core i7-8550U Processor (8M Cache, 1.80 GHz up to 4.00 GHz) Display 15.6 FHD(1920 x 1080) Display Memory 8GB 2400MHz DDR4 RAM Storage 256GB PCI-E SSD Graphics NVIDIA GeForce MX150 with 2GB DDR5 Graphics Operating System Windows 10 Home Battery 4 cell lithium polymer battery Audio Built-in Dual Speakers,Dolby Audio',
                'image' => 'product3.jpg',
            ],
            3 => [
                'product_id' => 4,
                'brand_id' => 2,
                'Category_id' => 2,
                'name' => 'T-shirt',
                'price' => '650',
                'description' => 'White T-shirts get a lot of attention, but let’s not forget their equally versatile (and more slimming) counterpart: the exceedingly wearable, deceptively simple black T-shirt. It’s a staple you can wear to work, the gym, and on a date. Plus, as Justin Vaughan, a perfumer and the founder of the incense brand Ponsont, puts it, a black tee is the perfect high-low uniform. “I can just as easily kick it with a farmer in Virginia as I can take a meeting in the city,” ',
                'image' => 'product4.jpg',
            ],
            4 => [
                'product_id' => 5,
                'brand_id' => 2,
                'Category_id' => 2,
                'name' => 'Shirt',
                'price' => '999',
                'description' => 'White T-shirts get a lot of attention, but let’s not forget their equally versatile (and more slimming) counterpart: the exceedingly wearable, deceptively simple black T-shirt. It’s a staple you can wear to work, the gym, and on a date. Plus, as Justin Vaughan, a perfumer and the founder of the incense brand Ponsont, puts it, a black tee is the perfect high-low uniform. “I can just as easily kick it with a farmer in Virginia as I can take a meeting in the city,” ',
                'image' => 'product5.jpg',
            ],
            5 => [
                'product_id' => 6,
                'brand_id' => 3,
                'Category_id' => 3,
                'name' => 'Saree',
                'price' => '3500',
                'description' => 'White T-shirts get a lot of attention, but let’s not forget their equally versatile (and more slimming) counterpart: the exceedingly wearable, deceptively simple black T-shirt. It’s a staple you can wear to work, the gym, and on a date. Plus, as Justin Vaughan, a perfumer and the founder of the incense brand Ponsont, puts it, a black tee is the perfect high-low uniform. “I can just as easily kick it with a farmer in Virginia as I can take a meeting in the city,” ',
                'image' => 'product6.jpg',
            ],
            6 => [
                'product_id' => 7,
                'brand_id' => 3,
                'Category_id' => 3,
                'name' => 'Three pieces',
                'price' => '1800',
                'description' => 'White T-shirts get a lot of attention, but let’s not forget their equally versatile (and more slimming) counterpart: the exceedingly wearable, deceptively simple black T-shirt. It’s a staple you can wear to work, the gym, and on a date. Plus, as Justin Vaughan, a perfumer and the founder of the incense brand Ponsont, puts it, a black tee is the perfect high-low uniform. “I can just as easily kick it with a farmer in Virginia as I can take a meeting in the city,” ',
                'image' => 'product7.jpg',
            ],
            7 => [
                'product_id' => 8,
                'brand_id' => 2,
                'Category_id' => 4,
                'name' => 'T-shirt for Kids',
                'price' => '450',
                'description' => 'White T-shirts get a lot of attention, but let’s not forget their equally versatile (and more slimming) counterpart: the exceedingly wearable, deceptively simple black T-shirt. It’s a staple you can wear to work, the gym, and on a date. Plus, as Justin Vaughan, a perfumer and the founder of the incense brand Ponsont, puts it, a black tee is the perfect high-low uniform. “I can just as easily kick it with a farmer in Virginia as I can take a meeting in the city,” ',
                'image' => 'product8.jpg',
            ],
            8 => [
                'product_id' => 9,
                'brand_id' => 2,
                'Category_id' => 4,
                'name' => 'Kids Pant',
                'price' => '780',
                'description' => 'White T-shirts get a lot of attention, but let’s not forget their equally versatile (and more slimming) counterpart: the exceedingly wearable, deceptively simple black T-shirt. It’s a staple you can wear to work, the gym, and on a date. Plus, as Justin Vaughan, a perfumer and the founder of the incense brand Ponsont, puts it, a black tee is the perfect high-low uniform. “I can just as easily kick it with a farmer in Virginia as I can take a meeting in the city,” ',
                'image' => 'product9.jpg',
            ],
            9 => [
                'product_id' => 10,
                'brand_id' => 3,
                'Category_id' => 4,
                'name' => 'Kids Shirt',
                'price' => '500',
                'description' => 'White T-shirts get a lot of attention, but let’s not forget their equally versatile (and more slimming) counterpart: the exceedingly wearable, deceptively simple black T-shirt. It’s a staple you can wear to work, the gym, and on a date. Plus, as Justin Vaughan, a perfumer and the founder of the incense brand Ponsont, puts it, a black tee is the perfect high-low uniform. “I can just as easily kick it with a farmer in Virginia as I can take a meeting in the city,” ',
                'image' => 'product10.jpg',
            ],
            10 => [
                'product_id' => 11,
                'brand_id' => 1,
                'Category_id' => 1,
                'name' => 'MI Band 7',
                'price' => '2250',
                'description' => 'Display 1.62 inch AMOLED Touch Display Resolution: 192 x 490 pixels，326 PPI Brightness: up to 500 nits, adjustable Tempered glass with anti-fingerprint coating Band faces:100+ Battery Charging type: magnetic charging Charging time: ≤2 hours Typical use time: ≥14 days Capacity: 180mAh Connectivity 5.2 BLE Material Strap Material: TPU Strap buckle: aluminium alloy OS Android 6.0 or higher, iOS 10 or higher SpecialFeatures Fitness: 110+ fitness modes 5 auto detection modes: outdoor running, walking, treadmill, rowing machine, elliptical Other features VO 2 max Training effect Training load Recovery duration Health: Heart rate monitoring SpO 2 tracking Sleep tracking (deep sleep, light sleep, ',
                'image' => 'product11.jpg',
            ],
            11 => [
                'product_id' => 12,
                'brand_id' => 3,
                'Category_id' => 3,
                'name' => 'Red White Saree',
                'price' => '3360',
                'description' => 'Display 1.62 inch AMOLED Touch Display Resolution: 192 x 490 pixels，326 PPI Brightness: up to 500 nits, adjustable Tempered glass with anti-fingerprint coating Band faces:100+ Battery Charging type: magnetic charging Charging time: ≤2 hours Typical use time: ≥14 days Capacity: 180mAh Connectivity 5.2 BLE Material Strap Material: TPU Strap buckle: aluminium alloy OS Android 6.0 or higher, iOS 10 or higher SpecialFeatures Fitness: 110+ fitness modes 5 auto detection modes: outdoor running, walking, treadmill, rowing machine, elliptical Other features VO 2 max Training effect Training load Recovery duration Health: Heart rate monitoring SpO 2 tracking Sleep tracking (deep sleep, light sleep, ',
                'image' => 'product12.jpg',
            ],
            12 => [
                'product_id' => 13,
                'brand_id' => 2,
                'Category_id' => 2,
                'name' => 'Denim Jacket',
                'price' => '2480',
                'description' => 'Display 1.62 inch AMOLED Touch Display Resolution: 192 x 490 pixels，326 PPI Brightness: up to 500 nits, adjustable Tempered glass with anti-fingerprint coating Band faces:100+ Battery Charging type: magnetic charging Charging time: ≤2 hours Typical use time: ≥14 days Capacity: 180mAh Connectivity 5.2 BLE Material Strap Material: TPU Strap buckle: aluminium alloy OS Android 6.0 or higher, iOS 10 or higher SpecialFeatures Fitness: 110+ fitness modes 5 auto detection modes: outdoor running, walking, treadmill, rowing machine, elliptical Other features VO 2 max Training effect Training load Recovery duration Health: Heart rate monitoring SpO 2 tracking Sleep tracking (deep sleep, light sleep, ',
                'image' => 'product13.jpg',
            ],
            13 => [
                'product_id' => 14,
                'brand_id' => 4,
                'Category_id' => 1,
                'name' => 'Samsung Galaxy S22 5G',
                'price' => '124500',
                'description' => 'Versions: SM-S901B, SM-S901B/DS (International); SM-S901U (USA); SM-S901U1 (USA unlocked); SM-S901W (Canada); SM-S901N (Korea); SM-S9010 (China); SM-S901E (Asia/Africa) NETWORK	Technology GSM / CDMA / HSPA / EVDO / LTE / 5G LAUNCH	Announced	2022, February 09 Status , 	Available. Released 2022, February 25 BODY	Dimensions	146 x 70.6 x 7.6 mm (5.75 x 2.78 x 0.30 in) Weight	167 g / 168 g (mmWave) (5.89 oz) Build	Glass front (Gorilla Glass Victus+), ',
                'image' => 'samsung s22.jpg',
            ],
        ];
        return self::$products;
    }

    public static function getProductById($id)
    {
        self::$products = self::products();
        foreach (self::$products as $product) {
            if ($product['product_id'] == $id) {
                return $product;
            }
        }
    }

    public static function getProductsByBrand($brandId)
    {
        self::$products = self::products();
        foreach (self::$products as $product) {
            if ($product['brand_id'] == $brandId) {
                array_push(self::$brandProducts, $product);
            }
        }

        return self::$brandProducts;
    }


}
