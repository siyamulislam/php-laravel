@extends('admin.master')
@section('title')
    Add Course
@endsection
@section('body')
    <div class="row">
        <div class="col-md-10 py-5 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="mx-auto float-start">Add Course</h3>
                    <a href="{{route('courses.index')}}" class="btn btn-primary float-end">Manage</a>
                </div>
                <div class="card-body">
{{--                    @foreach($errors->all() as $error)--}}
{{--                        <span class="text-danger">{{$error}}</span> <br>--}}
{{--                        @endforeach--}}
                    <form action="{{route('courses.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-1">
                            <label for="" class="col-md-4">Category</label>
                            <div class="col-md-8">
                                <select name="course_category_id" id="category_id" class="form-control select2"
                                        data-toggle="select2"
                                        data-placeholder="--Select a Category--"
                                >
                                    <option></option>
                                    @foreach($courseCategories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                @error('course_category_id') <span class="text-danger">{{$errors->first('course_category_id')}}</span> @enderror

                            </div>
                        </div>
                        <div class="row mt-1">
                            <label for="" class="col-md-4">Sub Category 2</label>
                            <div class="col-md-8">
                                <select name="course_sub_category_id" id="subCategory" class="form-control select2"
                                        data-toggle="select2"
                                        data-placeholder="--Select a Sub Category--"
                                >
                                    <option></option>
{{--                                    @foreach($courseSubCategories as $category)--}}
{{--                                        <option value="{{$category->id}}">{{$category->name}}</option>--}}
{{--                                    @endforeach--}}
                                </select>
                                @error('course_category_id') <span class="text-danger">{{$message}}</span> @enderror

                            </div>
                        </div>
                        <div class="row mt-1">
                            <label for="" class="col-md-4">Title</label>
                            <div class="col-md-8">
                                <input type="text" name="title" class="form-control"/>
                                @error('title') <span class="text-danger">{{$errors->first('title')}}</span> @enderror

                            </div>

                        </div>
                        <div class="row mt-1">
                            <label for="" class="col-md-4">Price</label>
                            <div class="col-md-8">
                                <input type="number" name="price" class="form-control"/>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <label for="" class="col-md-4">Duration(Hours)</label>
                            <div class="col-md-8">
                                <input type="text" name="total_hour" class="form-control"/>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <label for="" class="col-md-4">Starting Date</label>
                            <div class="col-md-8">
                                <input type="date" name="starting_date" class="form-control"/>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <label for="" class="col-md-4">Ending Date</label>
                            <div class="col-md-8">
                                <input type="date" name="ending_date" class="form-control"/>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <label for="" class="col-md-4">Short Description</label>
                            <div class="col-md-8">
                                <textarea name="short_description" id="" class="form-control" cols="30"
                                          rows="2"></textarea>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <label for="" class="col-md-4">Long Description</label>
                            <div class="col-md-8">
                                <textarea name="long_description" id="" class="form-control" cols="30"
                                          rows="3"></textarea>
                            </div>
                        </div>

                        {{--                        <div class="row mt-1">--}}
                        {{--                            <label  class="col-md-4">Status</label>--}}
                        {{--                            <div class="col-md-8">--}}
                        {{--                                <label ><input type="radio" name="status" value="1" checked > Published</label>--}}
                        {{--                                <label class="ms-2"><input type="radio" name="status" value="0" > UnPublished</label>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}

                        <div class="row mt-1">
                            <label for="" class="col-md-4">Image</label>
                            <div class="col-md-8">
                                <input type="file" name="image"/>
                                <br> @error('image') <span class="text-danger">{{$message}}</span> @enderror

                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-success " value="Create Course"/>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section( 'script')
    <script>
        $(document).on('change', '#category_id', function () {
            let categoryId = $(this).val();
            // alert(categoryId);
            $.ajax({
                // url: "/get-sub-category-by-category-id/"+categoryId,
                {{--url:"{{route("ggfgf")}}",--}}
                url: "/get-sub-category-by-category-id",
                // method: "GET",
                method: "POST",
                dataType: "JSON",
                data:{category_id:categoryId},
                success: function (response) {
                    console.log(response);

                    var option = '';
                    option += '<option  class="text-muted">Select a sub Category</option>';
                    $.each(response, function (index, value) {
                        option += '<option value="'+value.id+'">'+value.name+'</option>';
                    })
                    $('#subCategory').empty().append(option); //empty akta delete kore
                    // $('#subCategory').empty().append(option);  //remove full element delete kore
                    // $.eah(response, (key,value))
                }
            })
        });
    </script>

@endsection



