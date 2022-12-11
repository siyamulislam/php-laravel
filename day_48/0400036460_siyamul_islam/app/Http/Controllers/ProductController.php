<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $categories,$brands, $products, $product;

    public function add()
    {
        $this->categories=Category::where('status',1)->get();
        $this->brands=Brand::where('status',1)->get();
        return view('admin.product.add',['categories'=>$this->categories,'brands'=>$this->brands]);
    }

    public function store(Request $request)
    {
        Product::createProduct($request);
        return redirect()->back()->with('success', 'Product Added Successfully');
    }

    public function manage()
    {
        $products = Product::orderBy('id', 'DESC')->get();
        return view('admin.product.manage', ['products' => $products]);
    }

    public function edit($id)
    {   $this->categories=Category::where('status',1)->get();
        $this->brands=Brand::where('status',1)->get();
        $this->product = Product::find($id);
        return view('admin.product.edit', [
            'product' => $this->product,
            'categories'=>$this->categories,'brands'=>$this->brands
        ]);
    }

    public function update(Request $request, $id)
    {
        Product::updateProduct($request, $id);
        return redirect('/product/manage')->with('success', 'Product update successfully');
    }

    public function delete($id)
    {
        Product::deleteProduct($id);
        return redirect('/product/manage')->with('delete', 'Product delete successfully');
    }
}
