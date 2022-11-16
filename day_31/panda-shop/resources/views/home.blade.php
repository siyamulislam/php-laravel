@extends('front.master')

@section('title')
    Home
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">All Product</h1>
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-md-3 mt-4">
                                <div class="card bg-dark text-white">
                                    <img src="{{asset('/assets/img/product/'.$product['image'])}}" height="250" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $product['name'] }}</h4>
                                        <p>Price: {{ $product['price'] }} tk</p>
                                        <hr>
                                        <a href=" " class="btn btn-outline-info">Buy Now</a>
                                        <a href=" " class="btn btn-outline-info">Add to Cart</a>
                                         <a href="{{ route('product-detail',['id' => $product['product_id']]) }}" class="btn btn-outline-info">View</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection

