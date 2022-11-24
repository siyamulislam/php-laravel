@extends('master')
@section('title')
    Add Product
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
                                <div class="card-header fw-bold display-6 text-info">Add Product</div>
                            </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <p class="text-center text-success">{{ Session::get('message') }}</p>
                            <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">Product Category</label>
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
                                    <label class="col-md-3">Product Brand</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="brand_id">
                                            <option>--Select Brand--</option>
                                            @foreach($brands as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"> Product Title</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="">Price</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="price">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="">Code</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="code">
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
                                        <input type="submit" class="btn btn-outline-info" value="Create New Product">
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
