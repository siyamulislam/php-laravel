@extends('admin.master')
@section('title')
    Manage Course
@endsection

@section("link")
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class=" fw-normal display-6 text-secondary float-start">Manage Courses
                            <a href="{{route('courses.create')}}"
                               class="btn btn-primary  float-end">Create</a>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table id="courseTable" class="table  table-striped dt-responsive table-hover nowrap w-100">
{{--                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">--}}
{{--                    <table id="scroll-horizontal-datatable" class="table dt-responsive nowrap w-100">--}}
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Sub Category</th>
                            @if(auth()->user()->role_type==1)
                                <th>Publisher</th>
                            @endif
                            <th>Title</th>
                            <th>Price</th>
                            <th>Total Hours</th>
{{--                            <th>Duration</th>--}}
{{--                            <th>Short Description</th>--}}
{{--                            <th>Long Description</th>--}}
                            <th>Status</th>
                            <th class="">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courses as $course)
                            <tr >
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{asset($course->image)}}" alt="" style="height: 70px;width: 70px"></td>

{{--                                <td>{{$course->course_category_id}}</td>--}}
                                <td>{{$course->category->name}}</td>
{{--                                <td>{{$course->subCategory->name}}</td>--}}
                                <td>{{$course->subCategory->name}}</td>
                                @if(auth()->user()->role_type==1)
{{--                                    <td>{{$course->user_id}}</td>@endif--}}
                                    <td>{{$course->trainer->name}}</td>@endif
                                <td>{{\Illuminate\Support\Str::limit($course->title,15)}}</td>
                                <td>{{ $course->price }}</td>
                                <td>{{ $course->total_hour }}</td>
{{--                                <td>{{ $course->starting_date.' to '.$course->ending_date }}</td>--}}
{{--                                <td>{{ $course->short_description }}</td>--}}
{{--                                <td>{!! \Illuminate\Support\Str::words( $course->long_description,20) !!}</td>--}}

                                <td>{{ $course->status==1?"Published":"Unpublished" }}</td>
                                <td class=" ">
                                    @if(auth()->user()->role_type==1)
                                    <a href="{{route('courses.approve',['id'=>$course->id])}}"
                                       class="btn btn-sm {{ $course->status == 1 ? 'btn-secondary' : 'btn-warning' }}"  title="Change Course Status ">
                                            <i class="{{ $course->status == 1 ? 'uil-arrow-up' : 'uil-arrow-down' }}"></i></a>
                                    @endif
                                    <a href="{{route('courses.show',$course->id)}}"
                                       class="btn btn-primary btn-sm">
                                        <i class="uil-eye"></i></a>
{{--                                        @if(auth()->user()->role_type==2)--}}
                                    <a href="{{route('courses.edit',$course->id)}}"
                                       class="btn btn-success btn-sm">
                                            <i class="uil-edit-alt"></i></a>
{{--                                        @endif--}}
                                        <form action="{{route('courses.destroy',$course->id)}}"
                                              method="post" style="display: inline-block"
                                              onsubmit="return confirm('Are you sure to delete this ?')" >
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">
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

@section("script")
{{--    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">--}}
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"> </script>
    <script>
        $(document).ready( function () {
            $('#courseTable').DataTable( {
                scrollX:true,
            } );
        } );
    </script>
@endsection


