<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    use HasFactory;
private static $enroll;
    public static function placeOrder($request)
    {
    self::$enroll=new Enroll();
    self::$enroll->course_id=$request->course_id;
    self::$enroll->student_id=auth()->id();
    self::$enroll->payment_method=$request->payment_method;
    self::$enroll->status=1;
    self::$enroll->save();

    }
    public function course(){
        return $this->belongsTo(Course::class);
    }
    public function student(){
        return $this->belongsTo(User::class,'student_id');
    }
}
