@extends('master')
@section('title')
    Add Category
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card bg-dark text-white">
                        <div class="card-header  ">
                            <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                <div class="card-header fw-bold display-6 text-info">Add Blog</div>
                            </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <p class="text-center text-success">{{ Session::get('message') }}</p>
                            <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3"> Category Name</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="category_id">
                                            <option>--Select Category--</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"> Blog Title</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="">Short Description</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="short_description">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="">Long Description</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="long_description">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="">Image</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for=""></label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-info" value="Create New Blog">
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
