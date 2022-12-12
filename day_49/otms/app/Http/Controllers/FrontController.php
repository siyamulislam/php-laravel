<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;


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
