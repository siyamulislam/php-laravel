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
    public function brandProduct($brand_id)
    {
       $this->products =Product::getProductsByBrand($brand_id);
        return view("brand.brand-product", ['products' => $this->products]);
    }


    public function category()
    {
       $this->categories =Category::getAllCategories();
        return view('category.category', ['categories' => $this->categories]);
    }
    public function categoryProduct($category_id)
    {
        $this->products =Product::getProductsByCategory($category_id);
        return view("category.category-product", ['products' => $this->products]);
    }


    public function fullName()
    {
        return view('full-name');
    }


    public function productDetail($id)
    {
        $this->product = Product::getProductById($id);
        return view('product-detail',['product'=> $this->product]);
    }
}
