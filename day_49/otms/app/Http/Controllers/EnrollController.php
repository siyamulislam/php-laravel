<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enroll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnrollController extends Controller
{
    public $user,$enroll;

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
    public function approveEnroll($id)
    {
        $this->enroll = Enroll::where('id', $id)->first();
        $this->enroll->status == 1 ? $this->enroll->status = 2 : ($this->enroll->status = 0?$this->enroll->status = 0:$this->enroll->status = 1);
        $this->enroll->save();
        return $this->enroll->status == 1 ?
            redirect()->back()->with('error', 'Enroll Pending!'):
            redirect()->back()->with('success', 'Enroll Approve Successfully!');
    }
    public function rejectEnroll($id)
    {
        $this->enroll = Enroll::where('id', $id)->first();
        $this->enroll->status == 0 ? $this->enroll->status = 2 : ($this->enroll->status = 2?$this->enroll->status = 0:$this->enroll->status = 1);
        $this->enroll->save();

        return $this->enroll->status == 0 ?
            redirect()->back()->with('error', 'Enroll Rejected!'):
            redirect()->back()->with('success', 'Enroll Approve Successfully!');
    }

}
