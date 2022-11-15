<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
public $products,$product;
    public function home()
    {
//        $product= new Product();//object with static
//        $product->products();
//        Product::products();//scope with static
//        echo '<pre>';
//        print_r(Product::products());
       $this->products =Product::products();
        return view("home", ['products' => $this->products]);
    }

    public function about()
    {
        return view("about");
    }

    public function contact()
    {
        return view("contact");
    }

    public function calculator()
    {
        return view("calculator");
    }

    public function series()
    {
        return view("series");
    }
    public function detail($id)
    {
        $this->product = Product::getProductById($id);
//        echo "$this->products";
        return view('detail',['product'=> $this->product]);
    }
}
