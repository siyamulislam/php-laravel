<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $categories;
    public function index(){
        $this->categories=Category::all();
        return view('blog.index',['categories'=>$this->categories]);
    }
    public function store(Request $request)
    {
        Category::addCategory($request);
        return redirect('/category/add')->with('message', 'Category Added Successfully');
    }

    public function manage(){

        return view('blog.manage');
    }

}
