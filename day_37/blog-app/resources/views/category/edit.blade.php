@extends('master')
@section('title')
    Edit Category
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card ">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <div class="fw-normal display-6 text-secondary">Update Category</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-center text-success">{{ Session::get('message') }}</p>
                            <form action="{{ route('category.update', ['id'=>$category->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3"> Category Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" value="{{ $category->name }}" class="form-control">

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="">Description</label>
                                    </div>
                                    <div class="col-md-9">
                                       <input name="description" value="{{ $category->description }}" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="">Image</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control mb-3" name="image">
                                        <img src="{{ asset($category->image) }}" alt="" height="50" width="70">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for=""></label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="submit" name="update_category" class="btn btn-outline-success" value="Update Category">
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
