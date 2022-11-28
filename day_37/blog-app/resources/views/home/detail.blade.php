@extends('master')
@section('title')
    {{ $blog->title }}
@endsection


@section('body')
    <section class="">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-6 pe-5">
                    <h2 class=""> {{ $blog->title }}</h2>
                    <small class=" fw-normal text-muted font-monospace">Category: {{ $blog->category['name']}}
                        | View: {{ $blog->hit_count }}
                        | Status: {{ $blog->status=1?"Published":"Unpublished"  }}
                        | {{ $blog->lastUpdate.' ago'}}
                    </small>
                    <hr class="text-muted">
                    <p class="lh-base"style="text-align: justify;">{{ $blog->short_description }}</p>
                </div>
                <div class="col-md-6"><img src="{{ asset($blog->image) }}" class="rounded " width="100%" alt="...">
                </div>
            </div>
            <div class="row py-5">
                <div class="col-md-1 mx-auto">
                </div>
                <div class="col-md-7 mx-auto">
                    <p class="lh-lg" style="text-align: justify;">{{ $blog->long_description  }}</p>

                </div>
                <div class="col-md-4 mx-auto">
                   <p>ad section</p>
                </div>
            </div>
        </div>
    </section>
@endsection
