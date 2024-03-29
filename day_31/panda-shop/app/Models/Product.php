<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    public static $products;
    public static $brandProducts = [],$categoryProducts = [];

    public static function products()
    {
//        echo self::$products;
        self::$products = [
            0 => [
                'product_id' => 1,
                'brand_id' => 1,
                'category_id' => 1,
                'name' => 'Redmi K20 Pro',
                'price' => '49000',
                'description' => 'Xiaomi Redmi K20 Price in Bangladesh (BDT 49,999). This smartphone comes 4G Networks, (6GB, 8GB) RAM and (64GB, 128GB, 256GB) ROM, 6.39 inches AMOLED Display, (48MP+13MP+8MP) Triple Rear and 20MP Selfie Camera, Android 9.0 (Pie), Octa core CPU, 4000 mAh Li-Po Battery.',
                'image' => 'product1.jpg',
            ],
            1 => [
                'product_id' => 2,
                'brand_id' => 1,
                'category_id' => 1,
                'name' => 'Redmi Note 11',
                'price' => '38000',
                'description' => 'The Redmi Note 11s (elevens), many as they may be, do tend to keep to a certain common aesthetic. At least the bulk of earlier ones, that is - the 11E and the just announced 11T and 11T Pro (yes, they keep coming) tend to feature a different camera styling. But let\'s focus on the 11S 5G we have here. The Redmi Note 11s (elevens), many as they may be, do tend to keep to a certain common aesthetic. At least the bulk of earlier ones, that is - the 11E and the just announced 11T and 11T Pro.',
                'image' => 'product2.jpg',
            ],
            2 => [
                'product_id' => 3,
                'brand_id' => 1,
                'category_id' => 1,
                'name' => 'MI Notebook Pro',
                'price' => '120000',
                'description' => 'This is MI Note Book Pro Core i7 512GB SD  16 GB Ram. Processor Intel Core i7-8550U Processor (8M Cache, 1.80 GHz up to 4.00 GHz) Display 15.6 FHD(1920 x 1080) Display Memory 8GB 2400MHz DDR4 RAM Storage 256GB PCI-E SSD Graphics NVIDIA GeForce MX150 with 2GB DDR5 Graphics Operating System Windows 10 Home Battery 4 cell lithium polymer battery Audio Built-in Dual Speakers,Dolby Audio',
                'image' => 'product3.jpg',
            ],
            3 => [
                'product_id' => 4,
                'brand_id' => 2,
                'category_id' => 2,
                'name' => 'T-shirt',
                'price' => '650',
                'description' => 'White T-shirts get a lot of attention, but let’s not forget their equally versatile (and more slimming) counterpart: the exceedingly wearable, deceptively simple black T-shirt. It’s a staple you can wear to work, the gym, and on a date. Plus, as Justin Vaughan, a perfumer and the founder of the incense brand Ponsont, puts it, a black tee is the perfect high-low uniform. ',
                'image' => 'product4.jpg',
            ],
            4 => [
                'product_id' => 5,
                'brand_id' => 2,
                'category_id' => 2,
                'name' => 'Shirt',
                'price' => '999',
                'description' => 'Product details of Stylish Regular Slim Fit Blank Cotton Long Sleeve Formal Shirt For Men Brand : Classic Men Material : Cotton Fabric Classification : Cotton Ball Printed Pattern : Solid Color Collar : Square Neck Colour : As given picture Sleeve Length : Long Sleeve Plate Type : Slim Sales Channel Type : E-commerce Only Sells Online Material Composition : 100% Cotton Size : M,L,XL M- long: 29", body: 40" L- long: 30 ", body: 42" XL- long: 31", body: 44 Specifications of Stylish Regular Slim Fit Blank Cotton Long Sleeve Formal Shirt For Men BrandNo BrandSKU165682207_BD-1099146346Main MaterialCotton What’s in the box	Shirt',
                'image' => 'product5.jpg',
            ],
            5 => [
                'product_id' => 6,
                'brand_id' => 3,
                'category_id' => 3,
                'name' => 'Saree',
                'price' => '3500',
                'description' => 'Product details of Exclusive Design Black Color Nokshi Saree For Women By Jamdani Gallery Product Type: saree Main Material: half silk Gender: Women Blouse Piece:Without Blouse Piece Occasion: Casual, Party & Festive Attractive designs Fashionable An uncommon present for the extraordinary individual Product Type:  saree Main Material: half silk Gender: Women Blouse Piece:Without Blouse Piece Occasion: Casual, Party & Festive Attractive designs Fashionable An uncommon present for the extraordinary individual Specifications of Exclusive Design Black Color Nokshi Saree For Women By Jamdani Gallery BrandNo BrandSKU227673268_BD-1262640616Main MaterialSilk What’s in the box',
                'image' => 'product6.jpg',
            ],
            6 => [
                'product_id' => 7,
                'brand_id' => 3,
                'category_id' => 3,
                'name' => 'Three pieces',
                'price' => '1800',
                'description' => 'Product details of Unstitched Exclusive, Fashionable, Stylish and Comfortable, High Quality Three Piece for Women, Three Piece [3 Piece], new dress collection for women 2021,কম্পিউটার এমব্রয়ডারি ডিজাইন করা স্ক্রীন প্রিন্ট থ্রি পিচ-Skin Print Cotton Three Piece For Women Product Type : স্ক্রীন প্রিন্ট থ্রি পিচ Body : রাজধানী ভয়েল 3 গজ Design Work : স্ক্রীন প্রিন্ট Gender : Women পায়জামাঃ মদিনা ভয়েল 2.5 গজ ওরনাঃ জরজেট 2.5 গজ Size: Free Size. Length: Upto 45 Inch. Comfortable to wear. Fashionable and elegant design. Color: As same as picture. High quality fabric, stylish design, and comfortable Easy to wash Designed according to latest patterns Colour Declaration : There Might Be Slight Variation In The Actual Color Of The Georgette Long Dress Due To Different Screen Resolutions.',
                'image' => 'product7.jpg',
            ],
            7 => [
                'product_id' => 8,
                'brand_id' => 2,
                'category_id' => 4,
                'name' => 'T-shirt for Kids',
                'price' => '450',
                'description' => 'PRODUCT DETAILS Size : 5-10 Years,10-16 Years TRADE INFO Quantity : 100 Pieces Destination Place : Colombo, Sri Lanka PRICE INFO FOB Price : Price on request ADDITIONAL INFORMATION Payment Terms : L/C Import Country : Central Asia,Eastern Asia,South Asia,Southeast Asia Coats Digital Messe Frankfurt Middle East GmbH Other Buying Offer From This Buyer',

                'image' => 'product8.jpg',
            ],
            8 => [
                'product_id' => 9,
                'brand_id' => 2,
                'category_id' => 4,
                'name' => 'Kids Pant',
                'price' => '780',
                'description' => 'Product details of Yellow Color full Pant For Kids Brand New and High Quality Yellow Color Made of Cotton Original Export Quality No harm forbabies\' skin Comfortable and warm for babies Stylish and fashion design make your baby more attractive Great for casual, daily, party or photoshoot, also a great idea for a baby show gifts About Kids Pant Kids Pants are an item of clothing worn from the waist to the ankles, covering both legs separately. The word pants generally means underwear and not Leggings . Shorts are similar to Leggings , but with legs that come down only to around the area of the knee, higher or lower depending on the style of the garment. To distinguish them from shorts, trousers may be called long trousers in certain contexts. ',
                'image' => 'product9.jpg',
            ],
            9 => [
                'product_id' => 10,
                'brand_id' => 3,
                'category_id' => 4,
                'name' => 'Kids Shirt',
                'price' => '500',
                'description' => 'Please enter PIN code to check delivery time & Pay on Delivery Availability 100% Original Products Pay on delivery might be available Easy 30 days returns and exchanges Try & Buy might be available BEST OFFERS Best Price: Rs. 479 Applicable on: Orders above Rs. 599 (only on first purchase) Coupon code: MYNTRA200 Coupon Discount: Rs. 200 off (check cart for final savings) View Eligible Products EMI option available EMI starting from Rs.32/month View Plan PRODUCT DETAILS Shirt in an airy cotton weave with a turn-down collar,',
                'image' => 'product10.jpg',
            ],
            10 => [
                'product_id' => 11,
                'brand_id' => 1,
                'category_id' => 1,
                'name' => 'MI Band 7',
                'price' => '2250',
                'description' => 'Display 1.62 inch AMOLED Touch Display Resolution: 192 x 490 pixels，326 PPI Brightness: up to 500 nits, adjustable Tempered glass with anti-fingerprint coating Band faces:100+ Battery Charging type: magnetic charging Charging time: ≤2 hours Typical use time: ≥14 days Capacity: 180mAh Connectivity 5.2 BLE Material Strap Material: TPU Strap buckle: aluminium alloy OS Android 6.0 or higher, iOS 10 or higher SpecialFeatures Fitness: 110+ fitness modes 5 auto detection modes: outdoor running, walking, treadmill, rowing machine, elliptical Other features VO 2 max Training effect Training load Recovery duration Health: Heart rate monitoring SpO 2 tracking Sleep tracking (deep sleep, light sleep, ',
                'image' => 'product11.jpg',
            ],
            11 => [
                'product_id' => 12,
                'brand_id' => 3,
                'category_id' => 3,
                'name' => 'Red White Saree',
                'price' => '3360',
                'description' => 'Silk sarees have their origins in Dhaka, Bangladesh and were popularized during the Mughal rule in India. Very delicate to touch and exotic to ka, Bangladesh and were popularized during the Mughal rule in India. Very delicate to touch and exotic to ',
                'image' => 'product12.jpg',
            ],
            12 => [
                'product_id' => 13,
                'brand_id' => 2,
                'category_id' => 2,
                'name' => 'Denim Jacket',
                'price' => '2480',
                'description' => ' Gender	Men Fit Type Comfort Fit Color Blue Hooded	NO Sleeves Type	Full Sleeves Pattern	Plain Brand	Only & Sons, Eigh, Blue Men Material	Denim Fit	Regular Occasion	Casual Wear Minimum Order Quantity	50 Product Description Denim jacket Made in Bangladesh COD 50% available Delivery All over India available Sizes S to XXl',
                'image' => 'product13.jpg',
            ],
            13 => [
                'product_id' => 14,
                'brand_id' => 4,
                'category_id' => 1,
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
    public static function getProductsByCategory($categoryId)
    {
        self::$products = self::products();
        foreach (self::$products as $product) {
            if ($product['category_id'] == $categoryId) {
                array_push(self::$categoryProducts, $product);
            }
        }

        return self::$categoryProducts;
    }


}
