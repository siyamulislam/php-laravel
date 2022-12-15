@extends('admin.master')
@section('title')
    Add Course Sub-Category
@endsection
@section('body')
    <div class="row">
        <div class="col-md-6 py-5 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="mx-auto float-start">Edit Course Sub-Category</h3>
                    <a href="{{route('course-sub-categories.index')}}" class="btn btn-primary float-end">Manage</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('course-sub-categories.update', $courseSubCategory->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="row mt-2">
                            <label for="" class="col-md-4">Sub-Category Name</label>
                            <div class="col-md-8">
                                <input type="text" name="name" value="{{$courseSubCategory->name}}"
                                       class="form-control"/>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Choose Category</label>
                                <div class="col-md-8">
                                    <select name="category_id" id="" class="form-control">
                                        <option
                                            value="{{$courseSubCategory->id}}">{{$courseSubCategory->courseCategory['name']}}</option>
                                        @foreach($courseCategories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="row mt-2">
                            <label class="col-md-4">Status</label>
                            <div class="col-md-8">
                                <label><input type="radio" name="status"
                                              value="1" {{$courseSubCategory->status==1? 'checked':''}} >
                                    Published</label>
                                <label class="ms-2"><input type="radio" name="status"
                                                           value="0" {{$courseSubCategory->status==0? 'checked':''}} >
                                    UnPublished</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-success" value="Update Sub-Category"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection





