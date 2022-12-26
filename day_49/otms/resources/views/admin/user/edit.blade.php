@extends('admin.master')
@section('title')
    Edit User
@endsection
@section('body')
    <div class="row">
        <div class="col-md-6 py-2 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="mx-auto float-start">Edit User</h3>
                    <a href="{{route('users.index')}}" class="btn btn-primary float-end">Manage</a>
                </div>
                <div class="card-body">
                    <form action="{{route('users.update',$user->id)}}" method="post" >
                        @csrf
                        @method('put')
                        <div class="row mt-1">
                            <label for="" class="col-md-4">Name</label>
                            <div class="col-md-8">
                                <input type="text" name="name" class="form-control" value="{{$user->name}}"/>
                                @error('name') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                        </div>
                        <div class="row mt-1">
                            <label for="" class="col-md-4">Email</label>
                            <div class="col-md-8">
                                <input type="email" name="email" class="form-control" value="{{$user->email}}"/>
                                @error('email') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                        </div>
                        <div class="row mt-0">
{{--                            <label for="" class="col-md-4">Password</label>--}}
                            <div class="col-md-8">
                                <input type="hidden" name="password" class="form-control" value="{{$user->password}}"/>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <label for="" class="col-md-4">Category</label>
                            <div class="col-md-8">
                                <select name="role" id="" class="form-control select"
                                        data-toggle="select2"
                                        data-placeholder="--Select a Role--">
                                    <option></option>
                                    @foreach((array) $roles as $role)
                                        <option value="{{$role->id}}" {{$role->id==$user->role_type?'selected':''}}>{{$role->role_name}}</option>
                                    @endforeach
                                </select>
                                @error('role') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                        </div>

                        <div class="row mt-2">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-success " value="Update User"/>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
