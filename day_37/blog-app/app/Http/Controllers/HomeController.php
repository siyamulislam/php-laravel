<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $categories,$category,$blogs,$blog;
   public function index(){
       $this->categories=Category::all();
       $this->blogs = Blog::all();
       return view('home.index', ['blogs' => $this->blogs,'categories'=>$this->categories]);
//       return view('welcome');
   }
}
