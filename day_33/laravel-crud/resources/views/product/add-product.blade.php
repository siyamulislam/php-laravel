@extends('front.master')

@section('title')
    Add Product
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mx-auto">
                    <div class="card bg-dark text-white fw-bold">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                <div class="card-header fw-bold display-6 text-info">Add Product</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-center text-success">{{Session::get('message')}}</p>
                            <form action="{{route('save-product')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <h3 class="text-success text-center"></h3>
                                {{--                                <div class="row mb-3">--}}
                                {{--                                    <div class="col-md-3">Product ID</div>--}}
                                {{--                                    <div class="col-md-9">--}}
                                {{--                                        <input type="number" class="form-control" name="product_id" placeholder="id"--}}
                                {{--                                               readonly value="">--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}

                                <div class="row mb-3">
                                    <div class="col-md-3">Product Name</div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name"
                                               placeholder="Enter product name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">Product Price</div>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="price"
                                               placeholder="Enter product price">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-3">Product Description</div>
                                    <div class="col-md-9">
                                    <textarea type="text" class="form-control" name="description" rows="2"
                                              placeholder="Write product description"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">Product Image</div>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image" accept="image/*" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" name="btn" value="Create New Product"
                                               class="btn btn-outline-info w-100">
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


