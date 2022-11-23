@extends('master')
@section('title')
    Manage Brand
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-11 mx-auto">
                    <div class="card bg-dark text-white">
                        <div class="card-header">
                            <div class="row">
                                <div class="card-header fw-bold display-6 text-info text-center">Manage Brand</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-success text-center">{{ Session::get('message') }}</p>
                            <p class="text-danger text-center">{{ Session::get('message_delete') }}</p>
                            <table class="table table-bordered table-hover table-dark  table-striped">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Brand Name</th>
                                    <th>Brand Description</th>
                                    <th style="width:10%">Image</th>
                                    <th style="width:20%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tbody>
                                @foreach($brands as $brand)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $brand->name }}</td>
                                        <td>{{ $brand->description }}</td>
                                        <td><img src="{{ asset($brand->image) }}" alt="" height="50" width="70"></td>
                                        <td>
                                            <a href="{}" class="btn btn-success btn-sm">Details</a>
                                            <a href="{{ route('brand.edit', ['id'=>$brand->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="{{ route('brand.delete', ['id'=>$brand->id]) }}" onclick="return confirm('Are you sure to delete this ?')" class="btn btn-danger btn-sm">Delete</a>
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
