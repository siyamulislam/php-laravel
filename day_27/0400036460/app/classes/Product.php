<?php


namespace App\classes;


class Product
{
    public $products = [];
    public $categoryProducts = [];
    public $brandProducts = [];

    public function __construct()
    {
        $this->products = [
            0=>[
                "id"=>1,
                "category_id"=>1,
                "brand_id"=>1,
                "name"=>'Redmi K20 pro',
                "description"=>'Xiaomi Redmi K20 Price in Bangladesh (BDT 49,999). This smartphone comes 4G Networks, (6GB, 8GB) RAM and (64GB, 128GB, 256GB) ROM, 6.39 inches AMOLED Display, (48MP+13MP+8MP) Triple Rear and 20MP Selfie Camera, Android 9.0 (Pie), Octa core CPU, 4000 mAh Li-Po Battery.',
                'price'=>49999,
                'image'=>'product1.jpg'
            ],
            1=>[
                "id"=>2,
                "category_id"=>1,
                "brand_id"=>1,
                "name"=>'Redmi Note 11s',
                "description"=>'The Redmi Note 11s (elevens), many as they may be, do tend to keep to a certain common aesthetic. At least the bulk of earlier ones, that is - the 11E and the just announced 11T and 11T Pro (yes, they keep coming) tend to feature a different camera styling. But let\'s focus on the 11S 5G we have here. The Redmi Note 11s (elevens), many as they may be, do tend to keep to a certain common aesthetic. At least the bulk of earlier ones, that is - the 11E and the just announced 11T and 11T Pro (yes, they keep coming) tend to feature a different camera styling. But let\'s focus on the 11S 5G we have here.',
                'price'=>35000,
                'image'=>'product2.jpg'
            ],
            2=>[
                "id"=>3,
                "category_id"=>1,
                "name"=>'Mi NoteBook Pro',
                "brand_id"=>1,
                "description"=>'Processor Intel Core i7-8550U Processor (8M Cache, 1.80 GHz up to 4.00 GHz) Display 15.6 FHD(1920 x 1080) Display Memory 8GB 2400MHz DDR4 RAM Storage 256GB PCI-E SSD Graphics NVIDIA GeForce MX150 with 2GB DDR5 Graphics Operating System Windows 10 Home Battery 4 cell lithium polymer battery Audio Built-in Dual Speakers,Dolby Audio',
                'price'=>95000,
                'image'=>'product3.jpg'
            ],
            3=>[
                "id"=>4,
                "category_id"=>2,
                "brand_id"=>2,
                "name"=>'T-shirt',
                "description"=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters',
                'price'=>1450,
                'image'=>'product4.jpg'
            ],
            4=>[
                "id"=>5,
                "category_id"=>2,
                "name"=>'Shirt',
                "brand_id"=>2,
                "description"=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters',
                'price'=>999,
                'image'=>'product5.jpg'
            ],
            5=>[
                "id"=>6,
                "category_id"=>3,
                "brand_id"=>3,
                "name"=>'Saree',
                "description"=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters',
                'price'=>3500,
                'image'=>'product6.jpg'
            ],
            6=>[
                "id"=>7,
                "category_id"=>3,
                "name"=>'Three pieces',
                "brand_id"=>3,
                "description"=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters',
                'price'=>'1800',
                'image'=>'product7.jpg'
            ],
            7=>[
                "id"=>8,
                "category_id"=>4,
                "name"=>'Kids t-shirt',
                "brand_id"=>2,
                "description"=>'PRODUCT DETAILS Size : 5-10 Years,10-16 Years TRADE INFO Quantity : 100 Pieces Destination Place : Colombo, Sri Lanka PRICE INFO FOB Price : Price on request ADDITIONAL INFORMATION Payment Terms : L/C Import Country : Central Asia,Eastern Asia,South Asia,Southeast Asia Coats Digital Messe Frankfurt Middle East GmbH Other Buying Offer From This Buyer',
                'price'=>450,
                'image'=>'product8.jpg'
            ],
            8=>[
                "id"=>9,
                "category_id"=>4,
                "brand_id"=>2,
                "name"=>'Kids Pant',
                "description"=>'Product details of Yellow Color full Pant For Kids Brand New and High Quality Yellow Color Made of Cotton Original Export Quality No harm forbabies\' skin Comfortable and warm for babies Stylish and fashion design make your baby more attractive Great for casual, daily, party or photoshoot, also a great idea for a baby show gifts About Kids Pant Kids Pants are an item of clothing worn from the waist to the ankles, covering both legs separately. The word pants generally means underwear and not Leggings . Shorts are similar to Leggings , but with legs that come down only to around the area of the knee, higher or lower depending on the style of the garment. To distinguish them from shorts, trousers may be called long trousers in certain contexts. The seller offers a wide selection of products from renowned brands in Bangladesh with a promise of fast, safe and easy online shopping experience through Daraz. The seller comes closer to the huge customers on this leading online shopping platform of all over Bangladesh and serving to the greater extent of achieving higher customer satisfaction. The brands working with Daraz are not only serving top class products but also are dedicated to acquiring brand loyalty. Specifications of Yellow Color full Pant For Kids BrandFashion ParkSKU117262078_BD-1036450605Main MaterialCotton What’s in the box	Yellow Color full Pant For Kids',
                'price'=>780,
                'image'=>'product9.jpg'
            ],
            9=>[
                "id"=>10,
                "category_id"=>4,
                "brand_id"=>3,
                "name"=>'Kids Shirt',
                "description"=>'Please enter PIN code to check delivery time & Pay on Delivery Availability 100% Original Products Pay on delivery might be available Easy 30 days returns and exchanges Try & Buy might be available BEST OFFERS Best Price: Rs. 479 Applicable on: Orders above Rs. 599 (only on first purchase) Coupon code: MYNTRA200 Coupon Discount: Rs. 200 off (check cart for final savings) View Eligible Products EMI option available EMI starting from Rs.32/month View Plan PRODUCT DETAILS Shirt in an airy cotton weave with a turn-down collar, buttons down the front and a yoke at the back. Long sleeves with buttoned cuffs, and a rounded hem. Material & Care 100% Cotton Machine Wash Specifications Sleeve Length Long Sleeves Collar Spread Collar Fit Regular Fit Print or Pattern Type Polka Dots Occasion Casual Length Regular Hemline Curved Placket Button Placket',
                'price'=>500,
                'image'=>'product10.jpg'
            ],
            10=>[
                "id"=>11,
                "category_id"=>1,
                "brand_id"=>1,
                "name"=>'Xiaomi Band 7',
                "description"=>'Display 1.62 inch AMOLED Touch Display Resolution: 192 x 490 pixels，326 PPI Brightness: up to 500 nits, adjustable Tempered glass with anti-fingerprint coating Band faces:100+ Battery Charging type: magnetic charging Charging time: ≤2 hours Typical use time: ≥14 days Capacity: 180mAh Connectivity 5.2 BLE Material Strap Material: TPU Strap buckle: aluminium alloy OS Android 6.0 or higher, iOS 10 or higher SpecialFeatures Fitness: 110+ fitness modes 5 auto detection modes: outdoor running, walking, treadmill, rowing machine, elliptical Other features VO 2 max Training effect Training load Recovery duration Health: Heart rate monitoring SpO 2 tracking Sleep tracking (deep sleep, light sleep, REM and naps) Sleep breathing quality tracking Female health tracking Stress monitoring, breathing exercises PAI (Personal Activity Intelligence',
                'price'=>2250,
                'image'=>'product11.jpg'
            ],

            11=>[
                "id"=>12,
                "category_id"=>3,
                "name"=>'Red White Saree',
                "brand_id"=>3,
                "description"=>'Silk sarees have their origins in Dhaka, Bangladesh and were popularized during the Mughal rule in India. Very delicate to touch and exotic to',
                'price'=>'3200',
                'image'=>'product12.jpg'
            ],
            12=>[
                "id"=>13,
                "category_id"=>2,
                "brand_id"=>2,
                "name"=>'Denim Jacket',
                "description"=>'Gender	Men Fit Type Comfort Fit Color Blue Hooded	NO Sleeves Type	Full Sleeves Pattern	Plain Brand	Only & Sons, Eigh, Blue Men Material	Denim Fit	Regular Occasion	Casual Wear Minimum Order Quantity	50 Product Description Denim jacket Made in Bangladesh COD 50% available Delivery All over India available Sizes S to XXl',
                'price'=>2740,
                'image'=>'product13.jpg'
            ],
        ];
    }

    public function getAllProduct()
    {
        return $this->products;
    }

    public function getProductsByCategory($categoryId)
    {
        foreach ($this->products as $product)
        {
            if($product['category_id'] == $categoryId)
            {
                array_push($this->categoryProducts, $product);
            }
        }

        return $this->categoryProducts;
    }

    public function getProductsByBrand($brandId)
    {
        foreach ($this->products as $product)
        {
            if($product['brand_id'] == $brandId)
            {
                array_push($this->brandProducts, $product);
            }
        }

        return $this->brandProducts;
    }


    public function getProductById($id)
    {
        foreach ($this->products as $product)
        {
            if($product['id'] == $id)
            {
                return $product;
            }
        }
    }
}