@extends('master')
@section('title')
    Manage Category
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card bg-dark text-white">
                        <div class="card-header">
                            <div class="row">
                                <div class="card-header fw-bold display-6 text-info text-center">Manage Category</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover table-dark  table-striped">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Category Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{--                                <tr>--}}
                                {{--                                    <td>12</td>--}}
                                {{--                                    <td>Tilte</td>--}}
                                {{--                                    <td>gdfffffffdfdfdgdfd</td>--}}
                                {{--                                    <td><img src="" alt="" height="50" width="70"></td>--}}
                                {{--                                    <td>--}}

                                {{--                                        <a href=" " class="btn btn-primary btn-sm">Edit</a>--}}
                                {{--                                        <a href=" " onclick="return confirm('Are you sure to delete this ?')"--}}
                                {{--                                           class="btn btn-danger btn-sm">Delete</a>--}}

                                {{--                                    </td>--}}
                                {{--                                </tr>--}}
                                <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->description }}</td>
                                        <td><img src="{{ asset($category->image) }}" alt="" height="50" width="70"></td>
                                        <td>
                                            <a href="{{ route('category.edit', ['id'=>$category->id]) }}" class="btn btn-primary btn-sm">Edit</a>
{{--                                            <a href="{{ route('category.delete', ['id'=>$category->id]) }}" onclick="return confirm('Are you sure to delete this ?')" class="btn btn-danger btn-sm">Delete</a>--}}
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
