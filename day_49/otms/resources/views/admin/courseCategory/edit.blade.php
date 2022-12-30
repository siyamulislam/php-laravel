@extends('admin.master')
@section('title')
    Edit Course Category
@endsection
@section('body')
    <div class="row">
        <div class="col-md-6 py-5 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="mx-auto float-start">Edit Course Category</h3>
                    <a href="{{route('course-categories.index')}}" class="btn btn-primary float-end"> Manage</a>
                </div>
                <div class="card-body">
                    <form action="{{route('course-categories.update',$courseCategory->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="row mt-2">
                            <label  for="" class="col-md-4">Category Name</label>

                            <div class="col-md-8">
                                <input type="text" name="name" class="form-control" value="{{$courseCategory->name}}" />
                            </div>
                        </div>

                        <div class="row mt-2">
                            <label  class="col-md-4">Status</label>
                            <div class="col-md-8">
                                <label ><input type="radio" name="status" value="1" {{$courseCategory->status==1? 'checked':''}} > Published</label>
                                <label class="ms-2"><input type="radio" name="status" value="0" {{$courseCategory->status==0? 'checked':''}}> UnPublished</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label  for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit"  class="btn btn-success" value="Update Category" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
