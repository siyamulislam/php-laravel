@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Update product Form</div>
                <div class="card-body">
                    <h3 class="text-success text-center">{{ Session::get('message') }}</h3>
                    <form action="{{ route('product.update',['id'=>$product->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="" class="col-md-3">Name</label>
                            <div class="col-md-9">
                                <input type="text" value="{{ $product->name }}" class="form-control" name="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-3">Category Name</label>
                            <div class="col-md-9">
                                <input type="text" value="{{ $product->category_name }}" class="form-control" name="category_name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-3">Brand Name</label>
                            <div class="col-md-9">
                                <input type="text" value="{{ $product->brand_name }}" class="form-control" name="brand_name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-3">Description</label>
                            <div class="col-md-9">
                                <textarea type="text" rows="5" class="form-control" name="description">{{ $product->description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-3">Image</label>
                            <div class="col-md-9">
                                <img src="{{ asset($product->image) }}" height="100" width="100" class="mb-3" alt="">
                                <input type="file" class="form-control-file" name="image">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-3">Publication Status</label>
                            <div class="col-md-9">
                                <label><input type="radio" {{ $product->status == 1 ? 'Checked' : '' }} checked name="status" value="1"/> Published</label>
                                <label><input type="radio" {{ $product->status == 0 ? 'Checked' : '' }} name="status" value="0"/> Unpublished</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-primary" value="Update Product">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
