<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
public $products,$product;
public $brands,$categories;
    public function home()
    {
       $this->products =Product::products();
        return view("home", ['products' => $this->products]);
    }
    public function brand()
    {
       $this->brands =Brand::getAllBrands();
        return view("brand.brand", ['brands' => $this->brands]);
    }
    public function category()
    {
       $this->categories =Category::getAllCategories();
        return view('category.category', ['categories' => $this->categories]);
    }



    public function detail($id)
    {
        $this->product = Product::getProductById($id);
//        echo "$this->products";
        return view('detail',['product'=> $this->product]);
    }
}
