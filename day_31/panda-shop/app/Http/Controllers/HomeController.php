<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
public $products,$product;
    public function home()
    {
       $this->products =Product::products();
        return view("home", ['products' => $this->products]);
    }



    public function detail($id)
    {
        $this->product = Product::getProductById($id);
//        echo "$this->products";
        return view('detail',['product'=> $this->product]);
    }
}
