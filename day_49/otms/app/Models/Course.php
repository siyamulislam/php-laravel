<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable=['course_category_id','course_sub_category_id','user_id',
        'title','price','short_description','long_description','image','starting_date',
        'ending_date','total_hour','slug','status','hit_count','apply_count'];
}
