@extends('front.master')
@section('title')
    Home
@endsection
@section('body')
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-intervel="100">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('/')}}front/img/slider/1.jpg" class="d-block w-100" style="height: 550px"
                     alt="Course Title">
            </div>
            <div class="carousel-item">
                <img src="{{asset('/')}}front/img/slider/2.jpg" class="d-block w-100" style="height: 550px"
                     alt="Course Title">
            </div>
            <div class="carousel-item">
                <img src="{{asset('/')}}front/img/slider/3.jpg" class="d-block w-100" style="height: 550px"
                     alt="Course Title">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">All Courses</h2>
                    <div class="row mt-4">
{{--                      @include('front.include.card')--}}
                        @forelse($courses as $course)
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="{{asset($course->image)}}" alt="" class="w-100"
                                         style="height: 250px">
                                    <div class="card-body">
                                        <h4 class="card-title text-success">{{$course->title}}</h4>
                                        <h6>Price: {{$course->price}}tk</h6>
                                        <p>Total hours: {{$course->total_hour}} hours</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="{{route('front.course.details',['slug'=>$course->slug])}}" class="btn btn-success">Enroll Now</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <h1 class="text-center">No Course Available</h1>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
