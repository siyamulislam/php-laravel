@extends('admin.master')
@section('title') Dashboard |  Category Details @endsection

@section('body')

    <div class="container">
        <div class="row py-3">
            <div class="col-md-6 pe-5">
                <h2 class="">Title: {{ $category->name }}</h2>
                <small>  Status: {{ $category->status=1?"Published":"Unpublished"  }}
                || Created at: {{ $category->created_at}}
                </small>
                <hr class="text-muted">
                <h4>Category Description</h4>
                <hr class="text-muted">
                <p class="lh-base" style="text-align: justify;">{{ $category->description  }}</p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset( $category->image) }}" class="rounded " width="100%" alt="...">
                <a href="{{ route('category.edit', ['id'=>$category->id]) }}
                    " class="btn btn-primary btn w-100 my-2">Edit</a>
                <a href="{{ route('category.delete', ['id'=>$category->id]) }}"
                   onclick="return confirm('Are you sure to delete this ?')"
                   class="btn btn-danger btn w-100">Delete</a>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-md-1 mx-auto">
            </div>
            <div class="col-md-7 mx-auto">
                {{--                <p class="lh-lg" style="text-align: justify;">{{ $blog->long_description  }}</p>--}}

            </div>
            {{--            <div class="col-md-4 mx-auto">--}}
            {{--
            {{--            </div>--}}
        </div>
    </div>

@endsection
