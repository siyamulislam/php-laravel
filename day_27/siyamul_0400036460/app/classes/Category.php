<?php


namespace App\classes;


class Category
{
    public $categoryes = [];

    public function __construct()
    {
        $this->categoryes = [
            0=>[
                "id"=>1,
                "name"=>'Electronics',
                "image"=>'category1.jpg',
            ],
            1=>[
                "id"=>2,
                "name"=>'Men Fashion',
                'image'=>'category2.jpg'
            ],
            2=>[
                "id"=>3,
                "name"=>'Women Fashion',
                'image'=>'category3.jpg'
            ],
            3=>[
                "id"=>4,
                "name"=>'Kids Fashion',
                'image'=>'category4.jpg'
            ]
        ];
    }

    public function getAllCategory()
    {
        return $this->categoryes;
    }
}