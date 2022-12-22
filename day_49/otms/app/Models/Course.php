<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\helper\Helper;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_category_id',
        'course_sub_category_id',
        'user_id',
        'title',
        'price',
        'short_description',
        'long_description',
        'image',
        'starting_date',
        'ending_date',
        'total_hour',
        'slug',
        'status',
        'hit_count',
        'apply_count'
    ];

    public static function createOrUpdateCourse($request, $id = null)
    {
        Course::updateOrCreate(['id' => $id], [
            'course_category_id' => $request->course_category_id,
            'course_sub_category_id' => $request->course_sub_category_id,
            'user_id' => auth()->id,
            'title' => $request->title,
            'price' => $request->price,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'image' =>Helper:: uploadFile($request->file('image'),'course'),
            'starting_date' => $request->starting_date,
            'ending_date' => $request->ending_date,
            'total_hour' => $request->total_hour,
            'slug' => str_replace(' ','-',$request->title),
        ]);
    }
    public function category(){
        return $this->belongsTo(CourseCategory::class,'course_category_id','id');
    }
    public function subCategory(){
        return $this->belongsTo(CourseSubCategory::class,'course_sub_category_id','id');
    }
    public function trainer(){
        return $this->belongsTo(User::class,'user_id','id');
    }

}
