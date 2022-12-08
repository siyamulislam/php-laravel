@extends('admin.master')
@section('title') Dashboard | Manage Product @endsection

@section('body')

    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class=" fw-normal display-6 text-secondary text-center">Manage Product</div>
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
                            <th >Image</th>
                            <th >Product Title</th>
                            <th >Category</th>
                            <th >Brand</th>
                            <th >Price</th>
                            <th >Status</th>
                            <th >Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr  class="{{ $product->status == 1 ? '' : 'bg-warning text-light' }}">

                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ asset($product->image) }}" alt="" height="50" width="50"></td>
                                <td>{{\Illuminate\Support\Str::words($product->name,2,'...')}}</td>
                                <td>{{ $product->category['name'] }}</td>
                                <td>{{ $product->brand['name'] }}</td>
                                <td>{{ $product->price}}</td>
                                <td>{{ $product->status==1?"Published":"Unpublished" }}</td>
                                <td>
                                    <a href="{{ route('product.details', ['id'=>$product->id]) }}"
                                       class="btn btn-success btn-sm">Details</a>
                                    <a href="{{ route('product.edit', ['id'=>$product->id]) }}"
                                       class="btn btn-primary btn-sm">Edit</a>
                                    <a href="{{ route('product.delete', ['id'=>$product->id]) }}"
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
