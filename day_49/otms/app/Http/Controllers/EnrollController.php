<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enroll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnrollController extends Controller
{
    public $user;

    public function placeOrder(Request $request)
    {
        if (auth()->check()){
            $this->user=Auth::user();
            if ($this->user->role_type==3){
//                $existEnroll= Enroll::where('course_id',$request->course_id)->where('student_id',auth()->id());
//                if ($existEnroll){
//                    if ($existEnroll->status==0) {
//                        return redirect()->back()->with('error','you already applied this course');
//                    }
//                }
                Enroll::placeOrder($request);
                return redirect()->route('front.home')->with('success', "Your Order Placed Successfully");
            }
            else{
                return redirect()->back()->with('error', "You Cant Join this course!");
            }
        }
        else{
            return redirect()->route('login')->with('error', "Please Login to make order");

        }

    }

public function manageEnroll(){
        return view('admin.enroll.manage',[
            'enrolls'=>Enroll::latest()->get(),
        ]);
}


}
