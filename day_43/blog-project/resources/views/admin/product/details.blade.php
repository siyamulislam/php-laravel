@extends('admin.master')
@section('title') Dashboard |  Product Details @endsection

@section('body')

    <div class="container">
        <div class="row py-3">
            <div class="col-md-6 pe-5">
                <h2 class="">Title: {{ $product->name }}</h2>
                <small>  Status: {{ $product->status=1?"Published":"Unpublished"  }}
                | {{ $product->lastUpdate.' ago'}}
                </small>
                <hr class="text-muted">
                <h4>Product Description</h4>
                <hr class="text-muted">
                <p ></p>
                <div class="lh-base" style="text-align: justify;">


                    {!!$product->description !!}

                </div>
            </div>

            <div class="col-md-6">
                <img src="{{ asset( $product->image) }}" class="rounded " width="100%" alt="...">
                <a href="{{ route('product.edit', ['id'=>$product->id]) }}
                    " class="btn btn-primary btn w-100 my-2">Edit</a>
                <a href="{{ route('product.delete', ['id'=>$product->id]) }}"
                   onclick="return confirm('Are you sure to delete this ?')"
                   class="btn btn-danger btn w-100">Delete</a>
            </div>
        </div>
        <hr class="text-muted">
        <div class="row py-2">
            <div class="col-md-1 mx-auto">
            </div>
            <div class="col-md-9 mx-auto">
                                <p class="lh-lg" style="text-align: justify;"> {!!$product->description !!}</p>

            </div>
                        <div class="col-md-2 mx-auto">

                        </div>
        </div>
    </div>

@endsection
