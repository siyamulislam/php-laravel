<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
        return view ('front.home.home');
    }
    public function about(){
        return view ('front.about.about');
    }public function contact(){
    return view ('front.contact.contact');
}
}
