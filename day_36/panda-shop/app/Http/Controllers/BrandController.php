<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return view('brand.index');
    }

    public function store(Request $request)
    {
        Brand::addBrand($request);
        return redirect('/brand/add')->with('message', 'brand Added Successfully');
    }

    public function manage()
    {
        $this->brands = Brand::all();
        return view('brand.manage', ['brands' => $this->brands]);
    }

    public function edit($id)
    {
        $this->brand = Brand::find($id);
        return view('brand.edit', ['brand' => $this->Brand]);
    }

    public function update(Request $request, $id)
    {
        Brand::updateBrand($request, $id);
        return redirect('/brand/manage')->with('message', 'brand update successfully');
    }

    public function delete($id)
    {
        Brand::deleteBrand($id);
        return redirect('/brand/manage')->with('message_delete', 'brand delete successfully');
    }
}
