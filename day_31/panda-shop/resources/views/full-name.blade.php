@extends('front.master')

@section('title')
    Full Name
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mx-auto">
                    <div class="card bg-dark text-white">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9"><div class="card-header display-6 text-info fw-bold">Get Full Name</div></div>
                        </div>

                        <div class="card-body">
                            <form action="{{route('get-full-name')}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="firstName" class="col-md-3 fw-bold">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="first_name" class="form-control" id="firstName"
                                               placeholder="First Name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="lastName" class="col-md-3 fw-bold">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="last_name" class="form-control" id="lastName"
                                               placeholder="Last Name">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fw-bold">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{Session::has('result')?Session::get('result'):'' }}" class="form-control" placeholder="Full Name">
{{--                                        <input type="text" value="" class="form-control" placeholder="Full Name">--}}
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit"  class="btn btn-outline-info w-100"
                                               value="Get Full Name">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection

