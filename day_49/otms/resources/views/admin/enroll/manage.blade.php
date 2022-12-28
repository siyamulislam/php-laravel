@extends('admin.master')
@section('title')
    Mange Enroll
@endsection

@section('body')
    <!-- start page title -->
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class=" fw-normal display-6 text-secondary float-start">Manage Category
                            <a href="#"
                               class="btn btn-primary  float-end">Create</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p class="text-success text-center">{{Session::has('success') ? Session::get('success') :""}}</p>
                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Title</th>
                            <th>Student Name</th>
                            <th>Course Name</th>

                            <th>Payment Method</th>
                            <th>Status</th>
                            <th class="float-end">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($enrolls as $enroll)
                            <tr class="">
                                  <td>{{ $loop->iteration }}</td>
                                <td>{{ $enroll->id }}</td>

                                <td>{{ $enroll->student->name }}</td>
                                <td>{{ $enroll->id }}</td>


                                <td>{{ $enroll->payment_method }}</td>
{{--                                <td>{{ $category->status==1?"Published":"Unpublished" }}</td>--}}
                                <td>{{ $enroll->status==1?"Pending":"Rejected" }}</td>

                                <td class="float-end">
                                    <a href=""class="btn btn-success btn-sm">
                                        <i class="uil-edit-alt"></i> </a>

                                    <form action=""
                                          method="post" style="display: inline-block"
                                          onsubmit="return confirm('Are you sure to delete this ?')">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"
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
