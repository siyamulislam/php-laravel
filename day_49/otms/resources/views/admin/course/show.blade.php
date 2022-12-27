@extends('admin.master')
@section('title')
    Edit Course
@endsection
@section('body')
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">{{$course->category->name}}</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">{{$course->subCategory->name }}</a></li>
                            <li class="breadcrumb-item active">Product Details</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Product Details</h4>
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
                                <!-- Product image -->
                                <a href="javascript: void(0);" class="text-center d-block mb-4">
                                    <img src="{{asset($course->image)}}" class="img-fluid" style="max-width: 280px;" alt="Product-img" />
                                </a>

                                <div class="d-lg-flex d-none justify-content-center">
                                    <a href="javascript: void(0);">
                                        <img src="{{asset($course->image)}}" class="img-fluid img-thumbnail p-2" style="max-width: 75px;" alt="Product-img" />
                                    </a>
                                    <a href="javascript: void(0);" class="ms-2">
                                        <img src="{{asset($course->image)}}" class="img-fluid img-thumbnail p-2" style="max-width: 75px;" alt="Product-img" />
                                    </a>
                                    <a href="javascript: void(0);" class="ms-2">
                                        <img src="{{asset($course->image)}}" class="img-fluid img-thumbnail p-2" style="max-width: 75px;" alt="Product-img" />
                                    </a>
                                </div>
                            </div> <!-- end col -->
                            <div class="col-lg-7">
                                <form class="ps-lg-4">
                                    <!-- Product title -->
                                    <h3 class="mt-0">{{$course->title}}<a href="{{route('courses.edit',$course->id)}}" class="text-muted"><i class="mdi mdi-square-edit-outline ms-2"></i></a> </h3>
                                    <p class="mb-1">Added Date: 09/12/2018</p>
                                    <p class="mb-1">Course Duration: {{$course->total_hour}}</p>
                                    <p class="mb-1">Starting: {{$course->starting_date}}</p>
                                    <p class="mb-1">Ending: {{$course->ending_date}}</p>
                                    <p class="font-16">
                                        <span class="text-warning mdi mdi-star"></span>
                                        <span class="text-warning mdi mdi-star"></span>
                                        <span class="text-warning mdi mdi-star"></span>
                                        <span class="text-warning mdi mdi-star"></span>
                                        <span class="text-warning mdi mdi-star"></span>
                                    </p>

                                    <!-- Product stock -->
                                    <div class="mt-3">
                                        <h4><span class="badge badge-success-lighten">Instock</span></h4>
                                    </div>

                                    <!-- Product description -->
                                    <div class="mt-4">
                                        <h6 class="font-14">Course Price:</h6>
                                        <h3> ${{$course->price}}</h3>
                                    </div>

                                    <!-- Enroll -->
                                    <div class="mt-4">
                                        <div class="d-flex">
                                            <button type="button" class="btn btn-success ms-2"><i class="mdi mdi-cart me-1"></i> Enroll Now</button>
                                        </div>
                                    </div>

                                    <!-- Product description -->
                                    <div class="mt-4">
                                        <h6 class="font-14">Description:</h6>
                                        <p>{{$course->short_description}}</p>
                                        <br>
                                        {!!$course->long_description!!}

                                    </div>

                                    <!-- Product information -->
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

                                </form>
                            </div> <!-- end col -->
                        </div> <!-- end row-->



                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->

    </div> <!-- container -->

    </div> <!-- content -->

@endsection

@section( 'script')
    <script>
        $(document).on('change', '#category_id', function () {
            let categoryId = $(this).val();
            // alert(categoryId);
            $.ajax({
                url: "/get-sub-category-by-category-id/" + categoryId,
                url: "/get-sub-category-by-category-id",
                // method: "GET",
                method: "POST",
                dataType: "JSON",
                data: {category_id: categoryId},
                success: function (response) {
                    console.log(response);

                    var option = '';
                    option += '<option  class="text-muted">Select a sub Category</option>';
                    $.each(response, function (index, value) {
                        option += '<option value="' + value.id + '">' + value.name + '</option>';
                    })
                    $('#subCategory').empty().append(option);
                }
            })
        });
    </script>

@endsection



