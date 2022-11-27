@extends('master')
@section('title')
    Manage Category
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-11 mx-auto">
                    <div class="card ">
                        <div class="card-header">
                            <div class="row">
                                <div class=" fw-normal display-6 text-secondary text-center">Manage Category</div>
{{--                                <div class="card-header fw-bold display-6 text-secondary text-center">Manage Category</div>--}}
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-success text-center">{{ Session::get('message') }}</p>
                            <p class="text-danger text-center">{{ Session::get('message_delete') }}</p>
                            <table class="table table-bordered table-hover  table-striped">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Blog Title</th>
                                    <th>Description</th>
                                    <th style="width:10%">Image</th>
                                    <th style="width:20%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->description }}</td>
                                        <td><img src="{{ asset($category->image) }}" alt="" height="50" width="70"></td>
                                        <td>
                                            <a href="{}" class="btn btn-success btn-sm">Details</a>
                                            <a href="{{ route('category.edit', ['id'=>$category->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="{{ route('category.delete', ['id'=>$category->id]) }}" onclick="return confirm('Are you sure to delete this ?')" class="btn btn-danger btn-sm">Delete</a>
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
