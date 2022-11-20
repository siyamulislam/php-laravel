<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $products,$product;
    public $brands,$categories;
    public function home()
    {

        return view("home" );
    }


}
