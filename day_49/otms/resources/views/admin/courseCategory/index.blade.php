@extends('admin.master')
@section('title')
    Course Category
@endsection

@section('body')
    <!-- start page title -->
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class=" fw-normal display-6 text-secondary float-start">Manage Category
                            <a href="{{route('course-categories.create')}}"
                               class="btn btn-primary  float-end">Create</a>
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
                            <th>Title</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courseCategories as $category)
                            <tr class="{{ $category->status == 1 ? '' : 'bg-secondary text-light ' }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->status==1?"Published":"Unpublished" }}</td>

                                <td>
                                    <a href="{{route('course-categories.edit',$category->id)}}"class="btn btn-success btn-sm">
                                            <i class="uil-edit-alt"></i> </a>

                                        <form action="{{route('course-categories.destroy',$category->id)}}"
                                              method="post" style="display: inline-block"
                                              onsubmit="return confirm('Are you sure to delete this ?')">
                                            @csrf
                                            @method('delete')
                                            <button type="submit"
                                                    {{--                                                onclick="return confirm('Are you sure to delete this ?')"--}}
                                                    class="btn btn-danger btn-sm">
                                                <i class=" uil-trash-alt"></i></button>
                                        </form>
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
