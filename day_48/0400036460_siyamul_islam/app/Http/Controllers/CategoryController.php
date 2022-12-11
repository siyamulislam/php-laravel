<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $category;

    public function add()
    {
        return view('admin.category.add');
    }

    public function store(Request $request)
    {
        Category::createCategory($request);
        return redirect()->back()->with('success', 'Category Added Successfully');
    }

    public function manage()
    {
//        $categories = Category::all();
//        $categories = Category::get(['id','name','status']);
//        $categories = Category::get(['id','name','description','status','image']);
        $categories = Category::orderBy('id', 'DESC')->get();
//        echo '<pre>';
//        print_r($categories);
        return view('admin.category.manage', ['categories' => $categories]);
    }

    public function edit($id)
    {
        $this->category = Category::find($id);
        return view('admin.category.edit', ['category' => $this->category]);
    }

    public function update(Request $request, $id)
    {
        Category::updateCategory($request, $id);
        return redirect('/category/manage')->with('success', 'Category update successfully');
    }

    public function delete($id)
    {
        Category::deleteCategory($id);
        return redirect('/category/manage')->with('delete', 'Category delete successfully');
    }

}
