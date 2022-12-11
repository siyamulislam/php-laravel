@extends('admin.master')

@section('title')
    Manage Products
@endsection

@section('body')
    <div class="row pt-5">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <span class="h3 lh-base">Manage Products</span>
                </div>
                <div class="card-body">
                    <p class="text-success">{{Session::has('success') ? Session::get('success') : ''}}</p>
                    <table class="table table-striped" id="basic-datatable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Product Name</th>
                            <th>Category Name</th>
                            <th>Brand Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>

                                <td>{{$loop->iteration}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->category_name}}</td>
                                <td>{{$product->brand_name}}</td>
                                <td>{{$product->price}}</td>
                                <td>{!! \Illuminate\Support\Str::words($product->description, 3, '...') !!}</td>
                                <td><img src="{{ asset($product->image) }}" alt="" height="60px" width="60px"></td>
                                <td>{{$product->status ==1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{ route('edit-product', ['id' => $product->id]) }}" class="btn btn-outline-info btn-sm">
                                        Edit
                                    </a>
                                    <a href="{{ route('delete-product', ['id' => $product->id]) }}" onclick="return confirm('Are you sure to delete this category')" class="btn btn-outline-danger btn-sm">
                                        Delete
                                    </a>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
