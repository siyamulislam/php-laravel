<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.index');
    }

    public function store(Request $request)
    {
        Product::productStore($request);
        return redirect('/product/add')->with('message','Product create successfully');
    }

    public function manage()
    {
        return view('admin.product.manage',['products'=>Product::all()]);
    }

    public function detail($id)
    {
        return view('admin.product.detail',['product'=>Product::find($id)]);
    }


    public function edit($id)
    {
        return view('admin.product.edit',['product'=>Product::find($id)]);
    }

    public function update(Request $request, $id)
    {
        Product::productUpdate($request,$id);
        return redirect('/product/manage')->with('message','Product update successfully');
    }

    public function delete($id)
    {
        Product::productDelete($id);
        return redirect()->back()->with('message','Product delete successfully');
    }
}
