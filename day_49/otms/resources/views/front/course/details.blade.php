<<<<<<< HEAD
@section('title')
    Course Details
@endsection

@section('body')
    
    Course Details
@endsection


=======
@extends('front.master')

@section('title')
    {{$course->slug}}
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{asset(($course->image))}}" alt="" style="height: 100px">

                </div>
                <div class="col-md-9">
                    <h3>{{$course->title}}</h3>
                    <p>{{$course->short_description}}</p>
                </div>
            </div>
            <div class="row bg-light">
                <div class="col-md-8 ">
                        <p>
                            <span>Price: {{$course->price}} BDT</span> <br>
                            <span>Duration: {{$course->total_hour}} Hours</span> <br>
                            <span>Starting: {{\Illuminate\Support\Carbon::parse($course->starting_date)->format('d-m-Y')}}</span> to
                            <span>{{\Illuminate\Support\Carbon::parse($course->ending_date)->format('d-m-Y')}}</span>
                        </p>
                </div>
                <div class="col-md-4 mt-4 ">
                        <a href="{{route('front.checkout-page',['slug'=>$course->slug])}}" class="btn btn-success ">Enroll Now</a>
                </div>

            </div>
        </div>
    </section>
    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    {!! $course->long_description !!}}
                </div>
                <div class="col-md-2">
                    <h5>Trainer name</h5>
                    <h1>{{$course->trainer->name}}</h1>
                </div>
            </div>
        </div>
    </section>
@endsection
>>>>>>> 2819615d9caefd67bc97f0e6a1ee380e78126cd2
