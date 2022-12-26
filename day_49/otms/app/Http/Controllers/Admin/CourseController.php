<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\CourseSubCategory;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $course, $subCategories;

    public function index()
    {
        return view('admin.course.index', [
            'courses' => Course::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.course.create', [
            'courseCategories' => CourseCategory::where('status', 1)->get(),
            'courseSubCategories' => CourseSubCategory::where('status', 1)->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
//            'course_category_id'=>'required |numeric',
//            'course_sub_category_id'=>'required',
//            'title'=>'required |string|Alpha',
            'image'=>'required|image',
        ],
        [
            'image.required'=>'image koi aaa?',
            'image.image'=>'onno file ken den?'
        ]);
        Course::createOrUpdateCourse($request);
        return redirect()->back()->with('success', 'Course created successfully.');
//        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('admin.course.courses.edit', [
            'course' => course::find($id),
            'courseCategories' => CourseCategory::where('status', 1)->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.course.edit', [
            'course' => Course::find($id),
            'courseCategories' => CourseCategory::where('status', 1)->get(),
            'courseCategory' => Course::find($id)->where('id', $id)->get("course_category_id")->first()
        ]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Course::createOrUpdateCourse($request, $id);
        return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->course = Course::find($id);
        if (isset($this->course->images)) {
            if (file_exists($this->course->images)) {
                unlink($this->course->images);
            }
        }
        return redirect()->back()->with('success','Course deleted successfully.');
    }

    public function getSubCategory(Request $request)
    {
//        return json_encode($request->category_id);
        $this->subCategories = CourseSubCategory::where('category_id',$request->category_id)->get(['id','name']);
        return response()->json($this->subCategories);
    }

    public function approveCourse($id){
        $this->course=Course::where('id',$id)->first();
//        if (  $this->course->status=1){
//            $this->course->status=0;
//        }
//        else{
//            $this->course->status=1;
//        }

        $this->course->status==0 ?    $this->course->status=1:   $this->course->status=0;

        $this->course->save();
        return redirect()->back()->with('success','Course approve successfully.');
    }
}
