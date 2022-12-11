@extends('admin.master')
@section('title') Dashboard | Add Category @endsection

@section('body')

    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card  ">
                <div class="card-header  ">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-9">
                            <div class="fw-normal display-6 text-secondary">Update Category</div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p class="text-center text-success">{{ Session::get('message') }}</p>
                    <form action="{{route('category.update', ['id'=>$category->id])}}" method="post" enctype="multipart/form-data">
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
                            <label class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <lebel> <input type="radio" name="status" value="1" {{$category->status==1?'checked':''}}  > Published</lebel>
                                <lebel> <input type="radio" name="status" value="0" {{$category->status==0?'checked':''}}> unPublished</lebel>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="">Image</label>
                            </div>
                            <div class="col-md-9">
                                <input type="file" class="form-control" name="image">
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

@endsection
