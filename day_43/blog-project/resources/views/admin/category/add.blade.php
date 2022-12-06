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
                            <div class="fw-normal display-6 text-secondary">Add Category</div>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <p class="text-center text-success">{{ Session::has('success') ?Session::get('success'):"" }}</p>
                    <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-md-3"> Category Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="">Description</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="description">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <lebel> <input type="radio" name="status" value="1" checked> Published</lebel>
                                <lebel> <input type="radio" name="status" value="0"> unPublished</lebel>
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
                                <input type="submit" class="btn btn-outline-success" value="Create New Category">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
