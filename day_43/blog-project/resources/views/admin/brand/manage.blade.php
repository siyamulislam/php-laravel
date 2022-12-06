@extends('admin.master')
@section('title') Dashboard | Manage Brand @endsection

@section('body')

    <div class="row">
        <div class="col-md-11 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class=" fw-normal display-6 text-secondary text-center">Manage Brand</div>
                    </div>
                </div>
                <div class="card-body">
                    <p class="text-success text-center">{{Session::has('success') ? Session::get('success') :""}}</p>
                    <p class="text-danger text-center">{{ Session::has('delete') ?Session::get('delete'):"" }}</p>
                    {{--                    <table class="table table-bordered table-hover  table-striped">--}}
                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Brand Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th style="width:10%">Image</th>
                            <th style="width:30%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($brands as $brand)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $brand->name }}</td>
                                <td>{{ Illuminate\Support\Str::limit($brand->description,30, '...') }}</td>
                                <td>{{ $brand->status==1?"Published":"Unpublished" }}</td>

                                <td><img src="{{ asset($brand->image) }}" alt="" height="50" width="70"></td>
                                <td>
                                    <a href="{{ route('brand.details', ['id'=>$brand->id]) }}"
                                       class="btn btn-success btn-sm">Details</a>
                                    <a href="{{ route('brand.edit', ['id'=>$brand->id]) }}"
                                       class="btn btn-primary btn-sm">Edit</a>
                                    <a href="{{ route('brand.delete', ['id'=>$brand->id]) }}"
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
