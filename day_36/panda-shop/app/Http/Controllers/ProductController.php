<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $categories,$category,$brands,$brand,$products,$product;
    public function index(){
        $this->categories=Category::all();
        $this->brands=Brand::all();
        return view('product.index',['categories'=>$this->categories,'brands'=>$this->brands]);
    }
    public function store(Request $request)
    {
        Product::addProduct($request);
        return redirect('/product/add')->with('message', 'product Added Successfully');
    }

    public function manage(){
        $this->categories=Category::all();
        $this->products = Product::all();
        return view('product.manage', ['products' => $this->products,'categories'=>$this->categories]);
    }
    public function edit($id)
    {
        $this->categories=Category::all();
        $this->brands=Brand::all();
        $this->product = product::find($id);
        return view('product.edit', ['product' => $this->product,'categories'=>$this->categories ],['brands'=>$this->brands ] );
    }
    public function update(Request $request, $id)
    {
//        echo '<pre>';
//        print_r($request);
        Product::updateProduct($request, $id);
        return redirect('/product/manage')->with('message', 'products update successfully');
    }

    public function delete($id)
    {
        Product::deleteProduct($id);
        return redirect('/product/manage')->with('message_delete', 'products delete successfully');
    }
    public function detail($id)
    {
        $this->categories=Category::all();
        $this->product = Product::find($id);
        return view('product.detail',['product'=>$this->product,'categories'=>$this->categories]);
    }
}
