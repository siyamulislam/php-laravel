<?php


namespace App\classes;


class Brand
{
    public $brands = [];
    public $brandProducts = [];

    public function __construct()
    {
        $this->brands = [
          0=>[
              'brand_id'=>1,
              'brand_name'=>'Xiaomi',
              'brand_image'=>'brand1.jpg'
          ],
          1=>[
              'brand_id'=>2,
              'brand_name'=>'Denim',
              'brand_image'=>'brand2.png'
          ],
          2=>[
              'brand_id'=>3,
              'brand_name'=>'Gucci',
              'brand_image'=>'brand3.jpg'
          ]
        ];
    }

    public function getAllBrand()
    {
        return $this->brands;
    }

}