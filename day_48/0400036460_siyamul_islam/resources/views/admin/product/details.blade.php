@extends('admin.master')
@section('title') Dashboard |  Product Details @endsection

@section('body')

    <div class="container">
        <div class="row py-3">
            <div class="col-md-4 ">
                <img src="{{ asset( $product->image) }}" class="rounded " width="100%" alt="...">
                <a href="{{ route('product.edit', ['id'=>$product->id]) }}
                    " class="btn btn-primary btn w-100 my-2">Edit</a>
                <a href="{{ route('product.delete', ['id'=>$product->id]) }}"
                   onclick="return confirm('Are you sure to delete this ?')"
                   class="btn btn-danger btn w-100">Delete</a>
            </div>

            <div class="col-md-5">
                <h2 class=""> {{ $product->name }}</h2>

                <small class="text-info" >  Brand: {{ $product->brand['name'] }}
                    | Category: {{ $product->category['name'] }}
                </small> <br>
                <small>  Status: {{ $product->status=1?"Published":"Unpublished"  }}
                    | {{ $product->lastUpdate.' ago'}}
                </small><br>
                <h3  class="pt-3 text-danger" ><sup class=" text-muted">Price:</sup> ৳ {{ $product->price }}</h3>
                <p><del>৳ {{ $product->price*2 }}</del>-50% discount</p>
                <hr class="text-muted">
                <h4>Product Description</h4>
                <hr class="text-muted">
                <p ></p>
                <div class="lh-base" style="text-align: justify;">
                    {!!$product->description !!}
                </div>

            </div>
            <div class="col-md-3">
                <h3 class="text-secondary">Sold by: {{$product->brand['name']}} </h3>

                <hr class="text-muted">
                <h4>Ratings & Reviews</h4>
                <hr class="text-muted">
                <p >4.7/5(1275) *</p>


            </div>
        </div>
        <hr class="text-muted">
        <div class="row py-2">
            <div class="col-md-1 mx-auto">
            </div>
            <div class="col-md-9 mx-auto">
                <h4>Product Description</h4>
                <hr class="text-muted">
                <p class="lh-lg" style="text-align: justify;"> {!!$product->description !!}</p>

            </div>
            <div class="col-md-2 mx-auto">

            </div>
        </div>
    </div>

@endsection
