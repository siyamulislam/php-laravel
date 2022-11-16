 @extends('front.master')

@section('title')
    Brands
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                    @foreach($brands as $brand)
                <div class="col-md-4">
                    <div class="card bg-dark text-white mb-3">
                        <img src="{{asset('/assets/img/brand/'.$brand['image'])}}" alt="" height="250" class="card-img">
                        <div class="card-body">
                            <h3>{{ $brand['name'] }}</h3>
{{--                            <a href="action.php?page=brand-product&&brand_id=<?php echo $brand['brand_id']?>" class="btn btn-outline-info">View</a>--}}
                            <a href="" class="btn btn-outline-info">View</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection


