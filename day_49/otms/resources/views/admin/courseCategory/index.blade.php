@extends('admin.master')
@section('title')
    Course Category
@endsection

@section('body')
    <!-- start page title -->
    <div class="row">
        <div class="col-md-11 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class=" fw-normal display-6 text-secondary text-center">Manage Category
                            <a href="{{route('course-categories.create')}}"
                               class="btn btn-primary  float-end">Add Course Category</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p class="text-success text-center">{{Session::has('success') ? Session::get('success') :""}}</p>
                    {{--                    <table class="table table-bordered table-hover  table-striped">--}}
                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th> Title</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courseCategories as $category)
                            <tr class="{{ $category->status == 1 ? '' : 'bg-secondary text-light ' }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->status==1?"Published":"Unpublished" }}</td>

                                <td>
                                    <a href="#"
                                       class="btn btn-success btn-sm">
                                        <i class="uil-edit-alt"></i>
                                    </a>
                                    <a href="#"
                                       onclick="return confirm('Are you sure to delete this ?')"
                                       class="btn btn-danger btn-sm">
                                        <i class=" uil-trash-alt"></i></a>
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

@section('script')

@endsection
