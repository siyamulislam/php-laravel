@extends('master')
@section('title')
    Add Category
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card ">
                        <div class="card-header  ">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <div class="fw-normal display-6 text-secondary">Update Blog</div>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <p class="text-center text-success">{{ Session::get('message') }}</p>
                            <form action="{{route('blog.update', ['id'=>$blog->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3"> Category Name</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="category_id">
{{--                                            {{$cat_id=--$blog->category_id}}--}}
                                            <option value="{{$blog->category_id}}">{{$categories[--$blog->category_id]->name}}</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"> Blog Title</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$blog->title}}" name="title">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="">Short Description</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control"value="{{$blog->short_description}}" name="short_description">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="">Long Description</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$blog->long_description}}" name="long_description">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="">Image</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image">
                                        <img src="{{ asset($blog->image) }}" alt="" height="50" width="70">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for=""></label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success" value="Update Blog">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
