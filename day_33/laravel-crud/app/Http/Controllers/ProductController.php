<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $product;
    public $products;
    public function addProduct()
    {
        return view("product.add-product" );
    }
    public function saveProduct(Request $req)
    {
        Product::createProduct($req);
        return redirect()->back()->with('message','product info save successfully!');
    }
    public function manageProduct()
    {
        $this->products = Product::all();
        return view('product.manage-product', ['products' => $this->products]);
    }
}
