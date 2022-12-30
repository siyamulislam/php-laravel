@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Product Detail Information</div>
                <div class="card-body">
                    <h3 class="text-success text-center">{{ Session::get('message') }}</h3>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <th>Name</th>
                            <td>{{ $product->name }}</td>
                        </tr>
                        <tr>
                            <th>Category Name</th>
                            <td>{{ $product->category_name }}</td>
                        </tr>
                        <tr>
                            <th>Brand Name</th>
                            <td>{{ $product->brand_name }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{ $product->description }}</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td><img src="{{ asset($product->image) }}" height="100" width="120" alt=""></td>
                        </tr>
                        <tr>
                            <th>Publication Status</th>
                            <td>{{ $product->status == 1 ? 'Published' : 'Unpublished' }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
