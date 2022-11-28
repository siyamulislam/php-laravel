@extends('master')
@section('title')
    Home
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="text-center"> <h1>Blogs</h1> </div>
            <div class="row">
                    @foreach($blogs as $blog)
{{--                    @php($lastUpdate=\App\Http\Controllers\HomeController::getLastUpdateDate($blog))@endphp--}}

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="card blog-card shadow h-400 my-4 border-0">
                        <a href="{{ route('home.detail', ['id'=>$blog->id]) }}">
                            <img src="{{$blog['image']}}" alt=""  height="162" class="card-img "></a>
                        <div class="card-body my-1">
                            <h6 class="text-secondary fw-normal ">#{{$blog->category['name']}}</h6>
                            <h4 class="fw-semibold my-3 ">
                                <a href="{{ route('home.detail', ['id'=>$blog->id]) }}"
                                   class="text-decoration-none text-dark  ">{{ $blog['title']}}</a>
                            </h4>
                            <small>
                                {{ \App\Http\Controllers\HomeController::getLastUpdateDate($blog).  " ago" }}</small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
