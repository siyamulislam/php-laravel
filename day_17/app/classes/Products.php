<?php


namespace App\classes;


class Products
{
    public $products;
public function allProducts(){
    $this->products=[
        0>=[
            'id'=>1,
            'name'=>'White Shirt',
            'price'=>'5000',
            'image'=>'assets/img/team-1.jpg',
            'description'=>'lorem ksbv isdfbv ivfjd djgb fjvbfkjbv kfhbvkfh',
        ],1>=[
            'id'=>2,
            'name'=>'Black Shirt',
            'price'=>'500',
            'image'=>'assets/img/team-2.jpg',
            'description'=>'lorem ksdvscvs ivfjd djgb fjvbfkjbv kfhbvkfh',
        ],2>=[
            'id'=>3,
            'name'=>'Pink Shirt',
            'price'=>'1000',
            'image'=>'assets/img/team-3.jpg',
            'description'=>'lorem ksbv isdfbv ivfjd djgb fjvbfkjbv kfhbvkfh',
        ],3>=[
            'id'=>4,
            'name'=>'Red Shirt',
            'price'=>'53000',
            'image'=>'assets/img/team-4.jpg',
            'description'=>'sdf sdf sdf sg vfjd djgb fjvbfkjbv kfhbvkfh',
        ],4>=[
            'id'=>5,
            'name'=>'Red Shirt',
            'price'=>'53000',
            'image'=>'assets/img/team-4.jpg',
            'description'=>'sdf sdf sdf sg vfjd djgb fjvbfkjbv kfhbvkfh',
        ],5>=[
            'id'=>6,
            'name'=>'Red Shirt',
            'price'=>'53000',
            'image'=>'assets/img/team-4.jpg',
            'description'=>'sdf sdf sdf sg vfjd djgb fjvbfkjbv kfhbvkfh',
        ],
    ];
    return $this->products;
}
}