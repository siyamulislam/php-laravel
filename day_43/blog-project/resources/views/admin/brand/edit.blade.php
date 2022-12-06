@extends('admin.master')
@section('title') Dashboard | Add Brand @endsection

@section('body')

    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card  ">
                <div class="card-header  ">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-9">
                            <div class="fw-normal display-6 text-secondary">Update Brand</div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p class="text-center text-success">{{ Session::get('message') }}</p>
                    <form action="{{route('brand.update', ['id'=>$brand->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-md-3"> brand Name</label>
                            <div class="col-md-9">
                                <input type="text" name="name" value="{{ $brand->name }}" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="">Description</label>
                            </div>
                            <div class="col-md-9">
                                <input name="description" value="{{ $brand->description }}" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <lebel> <input type="radio" name="status" value="1" {{$brand->status==1?'checked':''}}  > Published</lebel>
                                <lebel> <input type="radio" name="status" value="0" {{$brand->status==0?'checked':''}}> unPublished</lebel>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="">Image</label>
                            </div>
                            <div class="col-md-9">
                                <input type="file" class="form-control" name="image">
                                <img src="{{ asset($brand->image) }}" alt="" height="50" width="70">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for=""></label>
                            </div>
                            <div class="col-md-9">
                                <input type="submit" name="update_brand" class="btn btn-outline-success" value="Update Brand">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
