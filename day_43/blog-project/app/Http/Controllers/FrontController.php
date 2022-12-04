<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
   public function home(){
       return view ('front.home.home');
   }
   public function productDetails(){
       return view ('front.product.details');
   }
}
