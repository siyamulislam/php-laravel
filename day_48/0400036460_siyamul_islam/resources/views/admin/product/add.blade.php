@extends('admin.master')
@section('title') Dashboard | Add Product @endsection

@section('body')

    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card  ">
                <div class="card-header  ">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-9">
                            <div class="fw-normal display-6 text-secondary">Add Product</div>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <p class="text-center text-success">{{ Session::has('success') ?Session::get('success'):"" }}</p>
                    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-2">
                            <label class="col-md-3"> Product Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-md-3">Category</label>
                            <div class="col-md-9">
                                <select name="category_id" id="" class="form-control">
                                    <option value="" selected disabled>--Select a Category--</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-md-3">Brand</label>
                            <div class="col-md-9">
                                <select name="brand_id" id="" class="form-control">
                                    <option value="" selected disabled>--Select a Brand--</option>
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-3">
                                <label for="">Price</label>
                            </div>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="price">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">
                                <label for="">Description</label>
                            </div>
                            <div class="col-md-9">
                                <textarea name="description" type="text" class="form-control" id="product_description" cols="30" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <lebel> <input type="radio" name="status" value="1" checked> Published</lebel>
                                <lebel> <input type="radio" name="status" value="0"> unPublished</lebel>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">
                                <label for="">Image</label>
                            </div>
                            <div class="col-md-9">
                                <input type="file" class="form-control" name="image">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3">
                                <label for=""></label>
                            </div>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-outline-success" value="Create New Product">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
