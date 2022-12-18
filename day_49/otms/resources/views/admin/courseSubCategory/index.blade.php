@extends('admin.master')
@section('title')
    Course Sub Category
@endsection

@section('body')
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class=" fw-normal display-6 text-secondary float-start">Manage Sub Category
                            <a href="{{route('course-sub-categories.create')}}"
                               class="btn btn-primary  float-end">Create</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Category</th>
                            <th>Sub Category</th>
                            <th>Slug</th>
                            <th>Status</th>
                            <th class="float-end">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courseSubCategories as $courseSubCategory)
                            <tr class="{{ $courseSubCategory->status == 1 ? '' : 'bg-secondary text-light ' }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{$courseSubCategory->category->name}}</td>
{{--                                <td>ok</td>--}}
                                <td>{{ $courseSubCategory->name }}</td>
                                <td>{{ $courseSubCategory->slug }}</td>

                                <td>{{ $courseSubCategory->status==1?"Published":"Unpublished" }}</td>

                                <td class="float-end">
                                    <a href="{{route('course-sub-categories.edit',$courseSubCategory->id)}}"
                                       class="btn btn-success btn-sm">
                                            <i class="uil-edit-alt"></i></a>


                                        <form action="{{route('course-sub-categories.destroy',$courseSubCategory->id)}}"
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


