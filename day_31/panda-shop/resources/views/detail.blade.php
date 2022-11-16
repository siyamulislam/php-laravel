@extends('front.master')

@section('title')
    Product Details
@endsection

@section('body')


    <div class="container">
        <div class="row mt-3 ">
            <div class="col-md-5 ">
                <div class="card card-body  text-white">
                    <img src="{{asset('/assets/img/'.$product['image'])}}" height="400px" alt="">
                </div>
            </div>
            <div class="col-md-7">
                <div class="card card-body bg-dark text-white">
                    <h1>{{ $product['name'] }}</h1>
                    <h4 class="mt-2">Price: {{ $product['price'] }} tk</h4>
                    <p class="mt-2">{{ $product['description'] }}</p>

                    <a href=" " class="btn btn-outline-info">Add to Cart</a>
                    <a href=" " class="btn btn-outline-info mt-2">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
@endsection




