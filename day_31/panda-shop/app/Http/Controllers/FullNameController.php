<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FullNameController extends Controller
{
    public $fullName;
    public function fullName(Request $req){
//        return $req->all();
       $this->fullName=$req->first_name. ' '.$req->last_name;

      return redirect()->back()->with('result',$this->fullName);
    }

}
