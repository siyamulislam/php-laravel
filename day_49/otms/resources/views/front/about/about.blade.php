@extends('front.master')


@section('title')
    About Us
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row bg-dark">
                <div class="col">
                    <div class="card card-body border-dark text-center text-uppercase">
                        <h3>About US</h3>
                         </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card card-body border-0">
                        <p class="fs-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta impedit mollitia nemo quaerat. Autem deserunt libero pariatur ut voluptatum! Accusamus adipisci, alias aliquam dolor dolorem fuga laborum maxime molestiae odit omnis pariatur placeat praesentium qui recusandae voluptate? Accusantium ad aliquam eaque eos esse numquam perspiciatis sed sunt! Accusamus ad cumque eius error exercitationem, explicabo iste magni, maiores omnis quam quidem ut voluptatum? Accusantium, autem fugiat. Accusantium assumenda consectetur debitis eos excepturi, fugit iure laudantium magnam molestiae natus necessitatibus numquam odio officia optio quis repellat rerum sit tempora ullam vel velit vitae voluptatum. Ad architecto deleniti ex incidunt libero reiciendis veritatis.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row bg-dark">
                <div class="col">
                    <div class="card card-body border-dark text-center text-uppercase">
                        <h5>All Instructor</h5>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('/') }}website/img/s2.jpg" alt="" class="">
                        <div class="card-body">
                            <h4>instructor name</h4>
                            <p>Instructor degicnation</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('/') }}website/img/s3.jpg" alt="" class="">
                        <div class="card-body">
                            <h4>instructor name</h4>
                            <p>Instructor degicnation</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('/') }}website/img/s2.jpg" alt="" class="">
                        <div class="card-body">
                            <h4>instructor name</h4>
                            <p>Instructor degicnation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
