@extends('master')
@section('title')
    {{ $blog->title }}
@endsection


@section('body')
    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card" style=" ">
                        <img src="{{ asset($blog->image) }}" class="card-img-top h-450" alt="...">
                        <div class="card-body">
                            <h2 class="card-title"> {{ $blog->title }}</h2>
                            <small class="card-title fw-normal text-muted">Category: {{ $categories[--$blog->category_id]->name }}
                             | View: {{ $blog->hit_count }}
                                | Status: {{ $blog->status=1?"Published":"Unpublished"  }}
                                | posted on: {{ $blog->	created_at }}
                                | Last update at: {{ $blog->	updated_at }}
                            </small>
                            <hr class="text-muted">
                            <p class="card-text">{{ $blog->short_description  }}</p>
                            <br>
                            <p class="card-text">{{ $blog->long_description  }}</p>
                                <a href="{{ route('blog.edit', ['id'=>$blog->id]) }}" class="btn btn-primary btn w-100 mb-2">Edit</a>
                                <a href="{{ route('blog.delete', ['id'=>$blog->id]) }}"
                                   onclick="return confirm('Are you sure to delete this ?')"
                                   class="btn btn-danger btn w-100">Delete</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
