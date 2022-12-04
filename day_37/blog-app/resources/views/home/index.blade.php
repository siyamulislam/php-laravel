@extends('master')
@section('title')
    Home
@endsection

@section('body')
    <section class="py-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <ul class="nav nav-tabs">
                            <li><a href="" class="nav-link active" data-bs-toggle="tab" data-bs-target="#all">All</a></li>
                            @foreach($categories as $category)
                                <li><a href="#{{$category->name}}" class="nav-link" data-bs-toggle="tab">{{$category->name}}</a></li>
                                @endforeach

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="all">
                                    <div class="container">
                                        <div class="row">
                                            @foreach($blogs as $blog)
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
                                                            <small>{{ \App\Http\Controllers\HomeController::getLastUpdateDate($blog)." ago" }}</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                            </div>

                            @foreach($categories as $category)
                                <div class="tab-pane show fade" id={{$category->name}}>
                                    <div class="container">
                                        <div class="row">
{{--                                            @php--}}
{{--                                                $blogs=\App\Http\Controllers\CategoryController::blogByCategory($category->id)}}
{{--                                            @endphp --}}
                                            @foreach(\App\Http\Controllers\CategoryController::blogByCategory($category->id) as $blog)
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
                                                            <small>{{ \App\Http\Controllers\HomeController::getLastUpdateDate($blog)." ago" }}</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
