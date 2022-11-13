<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }
    public function welcome(){
        return view('welcome');
    }
    public function bitm(){
        return ('Hello BITM');
    }public function basis(){
        return ('Hello BASIS');
    }
}
