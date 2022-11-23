@extends('master')
@section('title')
    Manage Products
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card bg-dark text-white">
                        <div class="card-header">
                            <div class="row">
                                <div class="card-header fw-bold display-6 text-info text-center">Manage Products</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-success text-center">{{ Session::get('message') }}</p>
                            <p class="text-danger text-center">{{ Session::get('message_delete') }}</p>
                            <table class="table table-bordered table-hover table-dark  table-striped">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Category</th>
                                    <th>Brand</th>
                                    <th>Product Title</th>
                                    <th>Price</th>
                                    <th>Code</th>
                                    <th style="width:8%">Image</th>
                                    <th  >Status</th>
                                    <th style="width:20%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $product->category['name'] }}</td>
                                        <td>{{ $product->brand['name'] }}</td>
{{--                                        <td>{{substr( $product->title , 0, 20).'..' }}</td>--}}
                                        <td>{{ $product->title }}</td>
                                        <td >{{ $product->price.'tk'}}</td>
                                        <td >{{ $product->code}}</td>
                                        <td><img src="{{ asset($product->image) }}" alt="" height="50" width="70"></td>
                                        <td  >{{ $product->status=1?"Published":"Unpublished"  }}</td>

                                        <td >
                                            <a href="{{ route('product.detail', ['id'=>$product->id]) }}" class="btn btn-success btn-sm">Details</a>
                                            <a href="{{ route('product.edit', ['id'=>$product->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="{{ route('product.delete', ['id'=>$product->id]) }}" onclick="return confirm('Are you sure to delete this ?')" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
