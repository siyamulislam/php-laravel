<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
class CategoryController extends Controller

{
    public $category;
    public function addCategory(){
return view('admin.category.add-category');
    }
    public function newCategory(Request $request){
        Category::createCategory($request);
        return redirect()->back()->with('message', 'Category Added Successfully');
    }

    public function manageCategory()
    {
//        $categories = Category::all();
//        $categories = Category::get(['id','name','status']);
//        $categories = Category::get(['id','name','description','status','image']);
        $categories = Category::orderBy('id' ,'DESC')->get();
//        echo '<pre>';
//        print_r($categories);
        return view('admin.category.manage-category', ['categories' => $categories]);
    }

    public function edit($id)
    {
        $this->category = Category::find($id);
        return view('admin.category.edit', ['category' => $this->category]);
    }

    public function update(Request $request, $id)
    {
        Category::updateCategory($request, $id);
        return redirect('/manage-category')->with('message', 'Category update successfully');
    }

    public function delete($id)
    {
        Category::deleteCategory($id);
        return redirect('/manage-category')->with('message_delete', 'Category delete successfully');
    }

      public function details($id)
    {
        $this->category=Category::find($id);
//
//        $lastUpdate = $this->getLastUpdateDate($this->blog);
//        $this->blog['lastUpdate']=$lastUpdate;
//        echo '<pre>';
//        print_r($dateFormat);
          return view('admin.category.details',['category'=>$this->category]);
    }

}
