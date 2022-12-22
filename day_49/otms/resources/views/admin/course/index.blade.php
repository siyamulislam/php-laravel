@extends('admin.master')
@section('title')
    Manage Course
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
                <div class="card-body">
                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
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
                            <th>Duration</th>
                            <th>Short Description</th>
                            <th>Long Description</th>
                            <th>Status</th>
                            <th class="float-end">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courses as $course)
                            <tr class="{{ $course->status == 1 ? '' : 'bg-secondary text-light ' }}">
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{asset($course->image)}}" alt="" style="height: 70px;width: 70px"></td>

{{--                                <td>{{$course->course_category_id}}</td>--}}
                                <td>{{$course->category->name}}</td>
{{--                                <td>{{$course->subCategory->name}}</td>--}}
                                <td>{{$course->subCategory->name}}</td>
                                @if(auth()->user()->role_type==1)
{{--                                    <td>{{$course->user_id}}</td>@endif--}}
                                    <td>{{$course->trainer->name}}</td>@endif
                                <td>{{ $course->title }}</td>
                                <td>{{ $course->price }}</td>
                                <td>{{ $course->total_hour }}</td>
                                <td>{{ $course->starting_date.' to '.$course->ending_date }}</td>
                                <td>{{ $course->short_description }}</td>
                                <td>{!! \Illuminate\Support\Str::words( $course->long_description,20) !!}</td>


                                <td>{{ $course->status==1?"Published":"Unpublished" }}</td>

                                <td class="float-end">
                                    <a href="{{route('courses.edit',$course->id)}}"
                                       class="btn btn-success btn-sm">
                                            <i class="uil-edit-alt"></i></a>


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


