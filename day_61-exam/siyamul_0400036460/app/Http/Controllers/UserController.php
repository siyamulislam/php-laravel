<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.index');
    }

    public function store(Request $request)
    {
        User::addUser($request);
        return redirect()->back()->with('message','New User Create Successfully');
    }

    public function manage()
    {
        return view('admin.user.manage',['users'=>User::all()]);
    }
}
