@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">All Product Information</div>
                <div class="card-body">
                    <h3 class="text-success text-center">{{ Session::get('message') }}</h3>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Name</th>
                            <th>Category Name</th>
                            <th>Brand Name</th>
                            <th>Image</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category_name }}</td>
                                <td>{{ $product->brand_name }}</td>
                                <td><img src="{{ asset($product->image) }}" alt="" width="120" height="80"></td>
                                <td>{{ $product->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{ route('product.detail',['id'=>$product->id]) }}" class="btn btn-warning btn-sm"><i class="fa fa-book-open"></i></a>
                                    <a href="{{ route('product.edit',['id'=>$product->id]) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('product.delete',['id'=>$product->id]) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
