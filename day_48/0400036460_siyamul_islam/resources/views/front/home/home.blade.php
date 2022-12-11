@extends('front.master')

@section('title') Home Page @endsection

@section('body')
    <div class="slider-area">
        <!-- Slider -->
        <div class="block-slider block-slider4">
            <ul class="" id="bxslider-home4">
                <li>
                    {{--                    <img src="{{asset('/')}}front/img/h4-slide.png" alt="Slide">--}}
                    <div class="caption-group">
                        <h2 class="caption title">
                            iPhone <span class="primary">6 <strong>Plus</strong></span>
                        </h2>
                        <h4 class="caption subtitle">Dual SIM</h4>
                        <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                    </div>
                </li>
                <li><img src="{{asset('/')}}front/img/h4-slide2.png" alt="Slide">
                    <div class="caption-group">
                        <h2 class="caption title">
                            by one, get one <span class="primary">50% <strong>off</strong></span>
                        </h2>
                        <h4 class="caption subtitle">school supplies & backpacks.*</h4>
                        <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                    </div>
                </li>
                <li><img src="{{asset('/')}}front/img/h4-slide3.png" alt="Slide">
                    <div class="caption-group">
                        <h2 class="caption title">
                            Apple <span class="primary">Store <strong>Ipod</strong></span>
                        </h2>
                        <h4 class="caption subtitle">Select Item</h4>
                        <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                    </div>
                </li>
                <li><img src="{{asset('/')}}front/img/h4-slide4.png" alt="Slide">
                    <div class="caption-group">
                        <h2 class="caption title">
                            Apple <span class="primary">Store <strong>Ipod</strong></span>
                        </h2>
                        <h4 class="caption subtitle">& Phone</h4>
                        <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- ./Slider -->
    </div> <!-- End slider area -->

    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->

    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Latest Products</h2>
                        <div class="product-carousel">

                            {{--                            @foreach($products as $product)--}}
                            {{--                            <div class="single-product">--}}
                            {{--                                <div class="product-f-image">--}}
                            {{--                                    <img src="{{ asset($product->image) }}"alt="" style="height:260px">--}}
                            {{--                                    <div class="product-hover">--}}
                            {{--                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>--}}
                            {{--                                        <a href="{{route('products',['id'=>$product->id])}}" class="view-details-link"><i class="fa fa-link"></i> See details</a>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}

                            {{--                                <h2><a href="{{route('products',['id'=>$product->id])}}">{{$product->name}}</a></h2>--}}

                            {{--                                <div class="product-carousel-price ">--}}
                            {{--                                    <del>৳{{$product->price*2}}.00</del> <ins>৳{{$product->price}}.00</ins>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="product-wid-rating " style="margin-top: 5px">--}}
                            {{--                                    <i class="fa fa-star"></i>--}}
                            {{--                                    <i class="fa fa-star"></i>--}}
                            {{--                                    <i class="fa fa-star"></i>--}}
                            {{--                                    <i class="fa fa-star"></i>--}}
                            {{--                                    <i class="fa fa-star"></i>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                            @endforeach--}}


                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="data:image/jpeg;base64,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" alt="" style="height:260px">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to
                                            cart</a>
                                        <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>

                                <h2><a href="">Apple</a></h2>

                                <div class="product-carousel-price ">
                                    <del>৳3400</del>
                                    <ins>৳34.00</ins>
                                </div>
                                <div class="product-wid-rating " style="margin-top: 5px">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>


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
                            {{--                            @foreach($brands as $brand)--}}
                            {{--                                <img src="{{asset($brand->image)}}" alt="" style="height: 150px">--}}
                            {{--                            @endforeach--}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->

    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top Sellers</h2>
                        <a href="" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="#"><img src="{{asset('/')}}front/img/product-thumb-1.jpg" alt=""
                                             class="product-thumb"></a>
                            <h2><a href="#">Sony Smart TV - 2015</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins>
                                <del>$425.00</del>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <a href="#"><img src="{{asset('/')}}front/img/product-thumb-2.jpg" alt=""
                                             class="product-thumb"></a>
                            <h2><a href="#">Apple new mac book 2015</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins>
                                <del>$425.00</del>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <a href="#"><img src="{{asset('/')}}front/img/product-thumb-3.jpg" alt=""
                                             class="product-thumb"></a>
                            <h2><a href="#">Apple new i phone 6</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins>
                                <del>$425.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Recently Viewed</h2>
                        <a href="#" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="#"><img src="{{asset('/')}}front/img/product-thumb-4.jpg" alt=""
                                             class="product-thumb"></a>
                            <h2><a href="#">Sony playstation microsoft</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins>
                                <del>$425.00</del>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <a href="#"><img src="{{asset('/')}}front/img/product-thumb-1.jpg" alt=""
                                             class="product-thumb"></a>
                            <h2><a href="#">Sony Smart Air Condtion</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins>
                                <del>$425.00</del>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <a href="#"><img src="{{asset('/')}}front/img/product-thumb-2.jpg" alt=""
                                             class="product-thumb"></a>
                            <h2><a href="#">Samsung gallaxy note 4</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins>
                                <del>$425.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top New</h2>
                        <a href="#" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="#"><img src="{{asset('/')}}front/img/product-thumb-3.jpg" alt=""
                                             class="product-thumb"></a>
                            <h2><a href="#">Apple new i phone 6</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins>
                                <del>$425.00</del>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <a href="#"><img src="{{asset('/')}}front/img/product-thumb-4.jpg" alt=""
                                             class="product-thumb"></a>
                            <h2><a href="#">Samsung gallaxy note 4</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins>
                                <del>$425.00</del>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <a href="#"><img src="{{asset('/')}}front/img/product-thumb-1.jpg" alt=""
                                             class="product-thumb"></a>
                            <h2><a href="#">Sony playstation microsoft</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins>
                                <del>$425.00</del>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->
@endsection
