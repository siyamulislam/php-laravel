@extends('master')
@section('title')
    Update Product
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
                                    <div class="card-header fw-bold display-6 text-info">Update Product</div>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <p class="text-center text-success">{{ Session::get('message') }}</p>
                            <form action="{{route('product.update', ['id'=>$product->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3"> Product Category</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="category_id">
{{--                                            {{$cat_id=--$product->category_id}}--}}
                                            <option value="{{$product->category_id}}">{{ $product->category['name'] }}</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"> Product Brand</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="brand_id">
                                            <option value="{{$product->brand_id}}">{{ $product->brand['name'] }}</option>
                                            @foreach($brands as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"> Product Title</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$product->title}}" name="title">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="">Price</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control"value="{{$product->price}}" name="price">
                                    </div>
                                </div>
                                 <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="">Code</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control"value="{{$product->code}}" name="code">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="">Description</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$product->description}}" name="description">
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="">Image</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image">
                                        <img src="{{ asset($product->image) }}" alt="" height="50" width="70">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for=""></label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-info" value="Update Product">
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
