@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add product Form</div>
                <div class="card-body">
                    <h3 class="text-success text-center">{{ Session::get('message') }}</h3>
                    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="" class="col-md-3">Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-3">Category Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="category_name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-3">Brand Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="brand_name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-3">Description</label>
                            <div class="col-md-9">
                                <textarea type="text" rows="5" class="form-control" name="description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-3">Image</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control-file" name="image">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-3">Publication Status</label>
                            <div class="col-md-9">
                                <label><input type="radio" checked name="status" value="1"/> Published</label>
                                <label><input type="radio" name="status" value="0"/> Unpublished</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-primary" value="Create New Product">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
