@extends('master')
@section('title')
    Manage Blogs
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card ">
                        <div class="card-header">
                            <div class="row">
                                <div class=" fw-normal display-6 text-secondary text-center">Manage Blog</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-success text-center">{{ Session::get('message') }}</p>
                            <p class="text-danger text-center">{{ Session::get('message_delete') }}</p>
{{--                            <table class="table table-bordered table-hover table-dark  table-striped">--}}
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>Short Description</th>
                                    <th style="width:8%">Image</th>
                                    <th  >Status</th>
                                    <th style="width:20%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
{{--                                        <td>{{ $categories[--$blog->category_id]->name }}</td>--}}
                                        <td>{{ $blog->category['name'] }}</td>
                                        <td>{{Illuminate\Support\Str::limit($blog->title,20, '...') }}</td>
                                        <td >{{substr( $blog->short_description,  0,35).'..'   }}</td>
                                        <td><img src="{{ asset($blog->image) }}" alt="" height="50" width="70"></td>
                                        <td  >{{ $blog->status=1?"Published":"Unpublished"  }}</td>

                                        <td >
                                            <a href="{{ route('blog.detail', ['id'=>$blog->id]) }}" class="btn btn-success btn-sm">Details</a>
                                            <a href="{{ route('blog.edit', ['id'=>$blog->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="{{ route('blog.delete', ['id'=>$blog->id]) }}" onclick="return confirm('Are you sure to delete this ?')" class="btn btn-danger btn-sm">Delete</a>
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
