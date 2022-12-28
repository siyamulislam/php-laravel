<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public $course;
    public function home(){
        return view ('front.home.home',[
            'courses'=>Course::where('status',1)->get(),
//            'categories'=>CourseCategory::where('status',1)->get(),

        ]);
    }

    public function about()
    {
        return view('front.about.about');
    }

    public function contact()
    {
        return view('front.contact.contact');
    }
    public function courseCategory($categoryID)
    {
        return view('front.category.index',[
            'courses'=>Course::where('course_category_id',$categoryID)->where('status',1)->get(),
            'category'=>CourseCategory::find($categoryID),
//            'categories'=>CourseCategory::where('status',1)->get(),

        ]);
    }
    public function courseDetails($slug)
    {
        $this->course=Course::where('slug',$slug)->where('status',1)->first();
        $this->course->hit_count=$this->course->hit_count+1;
        return view('front.course.details',[
            'course'=> $this->course,
        ]);
    }
    public function checkoutPage($slug)
    {
        $this->course=Course::where('slug',$slug)->first();
        return view('front.course.checkout',[
            'course'=> $this->course,
        ]);
    }
}

