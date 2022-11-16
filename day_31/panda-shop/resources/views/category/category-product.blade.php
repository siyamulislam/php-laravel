@extends('front.master')

@section('title')
    Category Product
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                    @foreach($products as $product)
                <div class="col-md-3">
                    <div class="card bg-dark text-white mb-3">
                        <img src="{{asset('/assets/img/product/'.$product['image'])}}" alt="" height="300px" class="card-img">
                        <div class="card-body">
                            <h5>{{ $product['name'] }}</h5>
                            <h6>Tk. {{ $product['price'] }}</h6>
                          <a href="{{ route('product-detail',['id' => $product['product_id']]) }}" class="btn btn-outline-info">View</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection




