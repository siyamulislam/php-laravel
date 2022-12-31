@extends('admin.master')
@section('title')
    Mange Enroll
@endsection

@section('body')
    <!-- start page title -->
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class=" fw-normal display-6 text-secondary float-start">Manage Enroll

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Trainer</th>
                            <th>Student</th>
                            <th>Price</th>
                            <th>Applied Date</th>
                            <th>Payment Method</th>
                            <th>Status</th>
                            <th class="float-end">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($enrolls as $enroll)
                            <tr class="">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $enroll->course->title }}</td>
                                <td>{{ $enroll->course->trainer->name}}</td>
                                <td>{{ $enroll->student->name }}</td>
                                <td>{{ $enroll->course->price }}</td>
                                <td>{{ $enroll->created_at->format('d-m-Y') }}</td>
                                <td>{{ $enroll->payment_method }}</td>
                                <td>{{ $enroll->status==0?"Rejected":($enroll->status==1?"Pending":"Approved") }}</td>
                                <td class="float-end">
                                <td>
                                    @if(!$enroll->status==0)
                                        <a href="{{route('enroll.approve',['id'=>$enroll->id])}}"
                                           class="me-1 btn btn-sm {{ $enroll->status==1 ? 'btn-warning' : 'btn-success' }}"
                                           title="update enroll">
                                            <i class="{{ $enroll->status==1 ? 'uil-arrow-down' : 'uil-arrow-up' }}"></i></a>
                                    @endif
                                    <a href="{{route('enroll.reject',['id'=>$enroll->id])}}"
                                       class="btn btn-{{ $enroll->status==0 ? 'danger' : 'light' }} btn-sm "><i
                                            class="{{ $enroll->status==0 ? 'uil-lock-alt' : 'uil-unlock-alt' }}"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
