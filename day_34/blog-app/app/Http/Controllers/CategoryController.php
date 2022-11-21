<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('category.index');
    }
    public function store(Request $request)
    {
        Category::addCategory($request);
        return redirect('/category/add')->with('message', 'Category Added Successfully');
    }
    public function manage(){
        return view('category.manage');
    }
}
