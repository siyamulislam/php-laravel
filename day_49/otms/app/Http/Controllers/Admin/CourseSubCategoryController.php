<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use App\Models\CourseSubCategory;
use Illuminate\Http\Request;
use function League\Flysystem\get;

class CourseSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.courseSubCategory.index', [
            'courseSubCategories'   => CourseSubCategory::latest()->get(),
//            'courseSubCategories'   => CourseSubCategory::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.courseSubCategory.create', [
            'courseCategories'  => CourseCategory::where('status', 1)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CourseSubCategory::createOrUpdateCourseSubCategory($request);
        return redirect()->back()->with('success', 'Sub-Category created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.courseSubCategory.edit', [
            'courseSubCategory' => CourseSubCategory::find($id),
            'courseCategories'  => CourseCategory::where('status', 1)->get()
        ]);
//        echo '<pre>';
//        print_r(CourseCategory::where('status', 1)->get());

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        CourseSubCategory::createOrUpdateCourseSubCategory($request, $id);
        return redirect()->back()->with('success', 'Sub-Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CourseSubCategory::find($id)->delete();
        return redirect()->back()->with('success', 'Sub-Category deleted successfully.');
    }
}
