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
                <div class="col-md-3">
                    <div class="card blog-card shadow h-400 my-4 border-0">
                        <img src="{{$blog['image']}}" alt="" height="162" class="card-img ">
                        <div class="card-body my-1">
                            <h6 class="text-secondary fw-normal ">#{{$blog->category['name']}}</h6>
                            <h4 class="fw-semibold my-3  ">
                                <a href="{{ route('blog.detail', ['id'=>$blog->id]) }}"
                                   class="text-decoration-none text-dark  ">{{ $blog['title']}}</a>
                            </h4>
                            <small>{{$blog->created_at}} | <span>3min ago</span></small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
