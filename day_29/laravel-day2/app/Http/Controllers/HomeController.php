<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view("home");
    } public function about(){
        return view("about");
    } public function contact(){
        return view("contact");
    }public function calculator(){
        return view("calculator");
    }public function series(){
        return view("series");
    }

    public function detail($id)
    {
        $this->products = Product::getBlogById($id);
        return view('detail',['blog'=> $this->blog]);
    }
}
