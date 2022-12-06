@extends('admin.master')
@section('title') Dashboard | Manage Category @endsection

@section('body')

    <div class="row">
        <div class="col-md-11 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class=" fw-normal display-6 text-secondary text-center">Manage Category</div>
                    </div>
                </div>
                <div class="card-body">
                    <p class="text-success text-center">{{Session::has('message') ? Session::get('message') :""}}</p>
                    <p class="text-danger text-center">{{ Session::has('message_delete') ?Session::get('message_delete'):"" }}</p>
                    {{--                    <table class="table table-bordered table-hover  table-striped">--}}
                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Category Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th style="width:10%">Image</th>
                            <th style="width:30%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ Illuminate\Support\Str::limit($category->description,30, '...') }}</td>
                                <td>{{ $category->status==1?"Published":"Unpublished" }}</td>

                                <td><img src="{{ asset($category->image) }}" alt="" height="50" width="70"></td>
                                <td>
                                    <a href="{{ route('category.details', ['id'=>$category->id]) }}"
                                       class="btn btn-success btn-sm">Details</a>
                                    <a href="{{ route('category.edit', ['id'=>$category->id]) }}"
                                       class="btn btn-primary btn-sm">Edit</a>
                                    <a href="{{ route('category.delete', ['id'=>$category->id]) }}"
                                       onclick="return confirm('Are you sure to delete this ?')"
                                       class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

@endsection
