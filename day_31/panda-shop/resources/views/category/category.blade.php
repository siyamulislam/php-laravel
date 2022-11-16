
@extends('front.master')

@section('title')
    Categories
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-md-4">
                        <div class="card bg-dark text-white mb-3">
                            <img src="{{asset('/assets/img/category/'.$category['image'])}}" alt="" height="250" class="card-img">
                            <div class="card-body">
                                <h3>{{ $category['name'] }}</h3>
                                <a href="{{ route('category-product',['id' => $category['id']]) }}" class="btn btn-outline-info">View</a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection



