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
    public function editProduct($id)
    {
        $this->product = Product::find($id);
        return view('product.edit-product', ['product' => $this->product] );
    }
    public function updateProduct(Request $request, $id)
    {
        Product::updateProduct($request,$id);
        return redirect('/manage-product')->with('message','product info update successfully!');
    }
    public function deleteProduct( $id)
    {
        Product::deleteProduct($id);
        return redirect('/manage-product')->with('message','product info delete successfully!');
    }
}
