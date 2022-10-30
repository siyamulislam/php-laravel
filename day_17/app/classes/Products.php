<?php


namespace App\classes;


class Products
{
    public $products = [];
    public function allProducts ()
    {
        $this->products = [
            0 => [
                'id'    => 1,
                'name'  => 'White Shirt',
                'price' => '5000',
                'image' => 'assets/img/11.jpg',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aspernatur, blanditiis commodi culpa itaque quas rerum tempora vitae! Explicabo id obcaecati placeat totam. Deserunt dolor, explicabo facere illo numquam voluptatem!'
            ],
            1 => [
                'id'    => 2,
                'name'  => 'White Pant',
                'price' => '15000',
                'image' => 'assets/img/12.jpg',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aspernatur, blanditiis commodi culpa itaque quas rerum tempora vitae! Explicabo id obcaecati placeat totam. Deserunt dolor, explicabo facere illo numquam voluptatem!'
            ],
            2 => [
                'id'    => 3,
                'name'  => 'White Shoe',
                'price' => '8000',
                'image' => 'assets/img/13.jpg',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aspernatur, blanditiis commodi culpa itaque quas rerum tempora vitae! Explicabo id obcaecati placeat totam. Deserunt dolor, explicabo facere illo numquam voluptatem!'
            ],
            3 => [
                'id'    => 4,
                'name'  => 'Red Saree',
                'price' => '15000',
                'image' => 'assets/img/14.jpg',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aspernatur, blanditiis commodi culpa itaque quas rerum tempora vitae! Explicabo id obcaecati placeat totam. Deserunt dolor, explicabo facere illo numquam voluptatem!'
            ],
            4 => [
                'id'    => 5,
                'name'  => 'Red Shoe',
                'price' => '5000',
                'image' => 'assets/img/15.jpg',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aspernatur, blanditiis commodi culpa itaque quas rerum tempora vitae! Explicabo id obcaecati placeat totam. Deserunt dolor, explicabo facere illo numquam voluptatem!'
            ],
            5 => [
                'id'    => 6,
                'name'  => 'Kids fashion',
                'price' => '6000',
                'image' => 'assets/img/16.jpg',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aspernatur, blanditiis commodi culpa itaque quas rerum tempora vitae! Explicabo id obcaecati placeat totam. Deserunt dolor, explicabo facere illo numquam voluptatem!'
            ],
        ];

        return $this->products;
    }
}