@extends('website.master')

@section('body')
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Products</h2>
                        <div class="product-carousel">
                            @foreach($products as $product)
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="{{ asset($product->image) }}" alt="" height="150" width="200">
                                    <div class="product-hover">
                                        <a href="{{ route('product.website.detail',['id'=>$product->id]) }}" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>

                                <h2><a href="{{ route('product.website.detail',['id'=>$product->id]) }}">{{ $product->name }}</a></h2>

                                <div class="product-carousel-price">
                                    <p>{{ $product->category_name }}</p>
                                    <p>{{ $product->brand_name }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->

    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="{{ asset('/') }}website/img/brand1.png" alt="">
                            <img src="{{ asset('/') }}website/img/brand2.png" alt="">
                            <img src="{{ asset('/') }}website/img/brand3.png" alt="">
                            <img src="{{ asset('/') }}website/img/brand4.png" alt="">
                            <img src="{{ asset('/') }}website/img/brand5.png" alt="">
                            <img src="{{ asset('/') }}website/img/brand6.png" alt="">
                            <img src="{{ asset('/') }}website/img/brand1.png" alt="">
                            <img src="{{ asset('/') }}website/img/brand2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->

@endsection
