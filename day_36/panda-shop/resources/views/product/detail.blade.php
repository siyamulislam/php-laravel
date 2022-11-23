@extends('master')
@section('title')
    {{ $product->title }}
@endsection


@section('body')
    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card" style=" ">
                        <img src="{{ asset($product->image) }}" class="card-img-top h-450 w-50" alt="...">
                        <div class="card-body">
                            <h2 class="card-title"> {{ $product->title }}</h2>
                            <small class="card-title fw-normal text-muted">
                                Category: {{  $product->category['name'] }}
                                | Brand: {{  $product->brand['name'] }}
                                | View: {{ $product->hit_count }}
                                | Status: {{ $product->status=1?"Published":"Unpublished"  }}
                                | posted on: {{ $product->	created_at }}
                                | Last update at: {{ $product->	updated_at }}
                            </small>
                            <hr class="text-muted">
                            <p class="card-text">{{ $product->description  }}</p>
                            <br>
                                <a href="{{ route('product.edit', ['id'=>$product->id]) }}" class="btn btn-primary btn w-100 mb-2">Edit</a>
                                <a href="{{ route('product.delete', ['id'=>$product->id]) }}"
                                   onclick="return confirm('Are you sure to delete this ?')"
                                   class="btn btn-danger btn w-100">Delete</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
