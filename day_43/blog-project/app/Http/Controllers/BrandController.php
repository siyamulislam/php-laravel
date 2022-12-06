<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public $brands, $brand;

    public function add()
    {
        return view('admin.brand.add');
    }

    public function store(Request $request)
    {
        Brand::createBrand($request);
        return redirect()->back()->with('success', 'Brand Added Successfully');
    }

    public function manage()
    {
        $brands = Brand::orderBy('id', 'DESC')->get();
        return view('admin.brand.manage', ['brands' => $brands]);
    }

    public function edit($id)
    {
        $this->brand = Brand::find($id);
        return view('admin.brand.edit', ['brand' => $this->brand]);
    }

    public function update(Request $request, $id)
    {
        Brand::updateBrand($request, $id);
        return redirect('/brand/manage')->with('success', 'Brand update successfully');
    }

    public function delete($id)
    {
        Brand::deleteBrand($id);
        return redirect('/brand/manage')->with('delete', 'Brand delete successfully');
    }

    public function details($id)
    {
        $this->brand = Brand::find($id);
        return view('admin.brand.details', ['brand' => $this->brand]);
    }
}
