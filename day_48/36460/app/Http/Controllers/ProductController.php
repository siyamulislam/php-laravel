<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct()
    {
        return view('admin.product.add');
    }

    public function newProduct(Request $request)
    {
        Product::createProduct($request);
        return redirect()->back()->with('success', 'Product created successfully');
    }

    public function manageProduct()
    {
        $this->products = Product::orderBy('id', 'DESC')->get();
        return view('admin.product.manage', [
            'products' => $this->products
        ]);
    }

    public function deleteProduct($id)
    {
        $this->product = Product::find($id);
        if (file_exists($this->product->image))
        {
            unlink($this->product->image);
        }
        $this->product->delete();
        return redirect()->back()->with('success', 'Product deleted successfully');
    }

    public function editProduct($id)
    {
        $this->product = Product::find($id);
        return view('admin.product.edit', [
            'product' => $this->product
        ]);
    }

    public function updateProduct(Request $request, $id)
    {
        Product::updateProduct($request, $id);
        return redirect('/manage-product')->with('success', 'Product updated successfully');
    }
}
