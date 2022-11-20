@extends('front.master')

@section('title')
    Manage Product
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card    bg-dark text-white">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                <div class="card-header fw-bold display-6 text-info">Manage Product</div>
                            </div>
                        </div>
                        <div class="card-body">
{{--                            <p class="text-center text-success">{{Session::get('message')}}</p>--}}
                            <table class="table table-bordered table-hover table-dark  table-striped">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                               <tr>
                                   <td>{{ $loop->iteration }}</td>
                                   <td>{{ $product->name }}</td>
                                   <td>{{ $product->price }}</td>
                                   <td>{{ $product->description }}</td>
                                   <td><img src="{{ asset($product->image) }}" alt="" height="50" width="70"></td>
                                   <td>
                                       <a href="" class="btn btn-primary btn-sm">Edit</a>
{{--                                       <a href="{{ route('product.edit', ['id'=>$product->id]) }}" class="btn btn-primary btn-sm">Edit</a>--}}
                                       <a href="" onclick="return confirm('Are you sure to delete this ?')" class="btn btn-danger btn-sm">Delete</a>
{{--                                       <a href="{{ route('product.delete', ['id'=>$product->id]) }}" onclick="return confirm('Are you sure to delete this ?')" class="btn btn-danger btn-sm">Delete</a>--}}
                                   </td>
                               </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection




