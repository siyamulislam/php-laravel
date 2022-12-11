@extends('admin.master')

@section('title')
    Edit Product
@endsection

@section('body')
    <div class="row mt-3">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <span class="h3 lh-base">Edit Product</span>
                </div>
                <div class="card-body">
                    <p class="text-success">{{Session::has('success') ? Session::get('success') : ''}}</p>
                    <form action="{{ route('update-product', ['id' => $product->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-2">
                            <label for="" class="col-md-4">Category Name</label>
                            <div class="col-md-8">
                                <input type="text" name="category_name" class="form-control" value="{{$product->category_name}}">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="" class="col-md-4">Brand Name</label>
                            <div class="col-md-8">
                                <input type="text" name="brand_name" class="form-control" value="{{$product->brand_name}}">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="" class="col-md-4">Product Name</label>
                            <div class="col-md-8">
                                <input type="text" name="product_name" value="{{$product->product_name}}" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="" class="col-md-4">Product Price</label>
                            <div class="col-md-8">
                                <input type="number" name="price" value="{{$product->price}}" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="" class="col-md-4">Product Description</label>
                            <div class="col-md-8">
                                <textarea name="description" id="description" cols="30" rows="3" class="form-control">{{$product->description}}</textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="" class="col-md-4">Product Image</label>
                            <div class="col-md-8">
                                <input type="file" name="image" class="form-control">
                                <img src="{{ asset($product->image) }}" alt="" style="height: 50px">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="" class="col-md-4">Status</label>
                            <div class="col-md-8">
                                <label for=""><input type="radio" name="status" value="1" {{ $product->status == 1 ? 'checked' : '' }} > Published</label>
                                <label for=""><input type="radio" name="status" value="0" {{ $product->status == 0 ? 'checked' : '' }}> Unpublished</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit"  class="btn btn-success" value="Edit Product" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
