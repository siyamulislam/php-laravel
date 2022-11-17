<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use function Symfony\Component\Finder\name;
use function Symfony\Component\HttpFoundation\Session\Storage\save;

class ProductController extends Controller
{
    public $product;
    public function addProduct()
    {
        return view("product.add-product" );
    }
    public function saveProduct(Request $req)
    {
//        return $req->all();

        Product::createProduct($req);
        return redirect()->back();
    }
}
