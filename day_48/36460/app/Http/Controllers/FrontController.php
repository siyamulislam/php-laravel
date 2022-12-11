<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FrontController extends Controller
{
    private $products, $product;
    public function home()
    {
        $this->products = Product::where('status', 1)->orderBy('id', 'DESC')->get();
        return view('front.home.home', [
            'products' => $this->products
        ]);
    }

    public function productDetails($id)
    {
        $this->product = Product::find($id);
        return view('front.product.details', [
            'product' => $this->product
        ]);
    }
}
