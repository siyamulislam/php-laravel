<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct()
    {
        return view("product.add-product" );
    }
    public function saveProduct()
    {
        return ("product.add-product" );
    }
}
