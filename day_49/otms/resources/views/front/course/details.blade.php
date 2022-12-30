@section('title')
    Course Details
@endsection

@extends('front.master')

@section('title')
    {{$course->slug}}
@endsection

@section('body')
    <section class="py-5">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between ">
                        <h4 class="px-5">Course Details</h4>
                        <div class=" px-5">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">{{$course->category->name}}</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">{{$course->subCategory->name }}</a></li>
                                <li class="breadcrumb-item active">Course Details</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-5">
                                    <!-- Course image -->
                                    <a href="javascript: void(0);" class="text-center d-block mb-4">
                                        <img src="{{asset($course->image)}}" class="img-fluid" style="max-width: 280px;" alt="Course-img" />
                                    </a>
                                    <div class="d-lg-flex d-none justify-content-center">
                                        <a href="javascript: void(0);">
                                            <img src="{{asset($course->image)}}" class="img-fluid img-thumbnail p-2" style="max-width: 75px;" alt="Course-img" />
                                        </a>
                                        <a href="javascript: void(0);" class="ms-2">
                                            <img src="{{asset($course->image)}}" class="img-fluid img-thumbnail p-2" style="max-width: 75px;" alt="Course-img" />
                                        </a>
                                        <a href="javascript: void(0);" class="ms-2">
                                            <img src="{{asset($course->image)}}" class="img-fluid img-thumbnail p-2" style="max-width: 75px;" alt="Course-img" />
                                        </a>
                                    </div>

                                    <!-- Course View -->
                                    <div class="my-4">
                                        <h5>Trainer: {{$course->trainer->name}}</h5>
                                        <h6 >Total View: {{$course->hit_count}}</h6>
                                    </div>

                                </div> <!-- end col -->
                                <div class="col-lg-7">
                                    <form class="ps-lg-4">
                                        <!-- Course title -->
                                        <h3 class="mt-0">{{$course->title}}</h3>
                                        <p class="mb-1">Added Date: 09/12/2018</p>
                                        <p class="mb-1">Course Duration: {{$course->total_hour}}</p>
                                        <p class="mb-1">Starting: {{$course->starting_date}}</p>
                                        <p class="mb-1">Ending: {{$course->ending_date}}</p>
                                        <p style="font-size: 25px">
                                            <span class="text-warning">&#9733;</span>
                                            <span class="text-warning">&#9733;</span>
                                            <span class="text-warning">&#9733;</span>
                                            <span class="text-warning">&#9733;</span>
                                            <span class="text-warning">&#9733;</span>
                                        </p>
                                        <!-- Course price -->
                                        <div class="mt-2">
                                            <h6 class="font-14">Course Price:</h6>
                                            <h3> ${{$course->price}}</h3>
                                        </div>
                                        <!-- Enroll -->
                                        <div class="mt-4">
                                            <a href="{{route('front.checkout-page',['slug'=>$course->slug])}}" class="btn btn-success ">Enroll Now</a>
                                        </div>
                                        <!-- Course information -->
                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h6 class="font-14">Total Seat:</h6>
                                                    <p class="text-sm lh-150">40</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <h6 class="font-14">Available Seat:</h6>
                                                    <p class="text-sm lh-150">{{40-$course->apply_count}}</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <h6 class="font-14">Number of Enrolled:</h6>
                                                    <p class="text-sm lh-150">{{$course->apply_count}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Course description -->
                                        <div class="mt-4">
                                            <h6 class="font-14">Description:</h6>
                                            <p>{{$course->short_description}}</p>
                                            <br>
                                            {!!$course->long_description!!}
                                        </div>
                                    </form>
                                </div> <!-- end col -->
                            </div> <!-- end row-->

                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div>
            <!-- end row-->
        </div>
@endsection
