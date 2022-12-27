@extends('admin.master')
@section('title')
    Manage User
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
                        <div class=" fw-normal display-6 text-secondary float-start">Manage Users
                            <a href="{{route('users.create')}}"
                               class="btn btn-primary  float-end">Create</a>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table id="userTable" class="table  table-striped dt-responsive table-hover nowrap w-100">
{{--                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">--}}
{{--                    <table id="scroll-horizontal-datatable" class="table dt-responsive nowrap w-100">--}}
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Password</th>
                            <th class="">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr >
                                <td>{{ $loop->iteration }}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role_type==1?"Admin":($user->role_type==2?"Teacher":"Student")}}</td>
                                <td>{{\Illuminate\Support\Str::limit($user->password,35)}}</td>

                                <td class="">
                                    <a href="{{route('users.show',$user->id)}}"
                                       class="btn btn-primary btn-sm">
                                        <i class="uil-eye-slash"></i></a>
                                    <a href="{{route('users.edit',$user->id)}}"
                                       class="btn btn-success btn-sm">
                                            <i class="uil-edit-alt"></i></a>
                                        <form action="{{route('users.destroy',$user->id)}}"
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
            $('#userTable').DataTable( {
                scrollX:true,
            } );
        } );
    </script>
@endsection


