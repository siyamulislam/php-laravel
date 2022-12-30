@extends('front.master')

@section('title')
    {{$course->slug}}
@endsection

@section('body')
    <section class="py-5" style="min-height: 85vh">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{asset(($course->image))}}" alt="" style="height: 100px">
                    <table class="table ">
                        <thead>
                        <tr>
                            <th>Course Name:</th>
                            <th>Course Price:</th>
                            <th>Starting Date:</th>
                            <th>Ending Date:</th>
                            <th>Total Hour:</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$course->title}}</td>
                            <td>{{$course->price}}</td>
                            <td>{{$course->starting_date}}</td>
                            <td>{{$course->ending_date}}</td>
                            <td>{{$course->total_hour}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12 ">
                    <form action="{{route('front.course.order')}}" method="post" class="d-flex">
                    @csrf
                    <div class="  ms-auto" style="max-width: 200px">
                        <label for="" class="">Payment Method</label>
                        <div class="mt-3">
                            <label for=""><input type="radio" name="payment_method" value="cash"> Cash</label><br>
                            <label for=""><input type="radio" name="payment_method" value="ssl"> SSLCOMMERZ</label>
                        </div>
                        <input type="hidden" name="course_id" value="{{$course->id}}">
                        <br>
                        <input type="submit" class="btn btn-success" value="Order This Course">
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection
