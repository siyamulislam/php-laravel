@extends('master')
@section('title')
    Home
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                    @foreach($blogs as $blog)
                <div class="col-md-3">
                    <div class="card blog-card h-400 my-4    ">
                        <img src="{{$blog['image']}}" alt="" height="162" class="card-img hover-zoom">
                        <div class="card-body my-1">
                            <h6 class="text-secondary fw-normal ">#{{$blog->category['name']}}</h6>
                            <h5 class="fw-semibold my-3  ">
                                <a href="{{ route('blog.detail', ['id'=>$blog->id]) }}"
                                   class="text-decoration-none text-dark  ">{{ $blog['title']}}</a>
                            </h5>
                            <small>{{$blog->created_at}} | <span>3min ago</span></small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
