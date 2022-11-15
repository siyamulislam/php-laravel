@include('includes/header')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">ALl Product</h1>
                <div class="row">

                    <div class="col-md-4 mt-3">
                        <div class="card bg-dark text-white">
                            <img src="{{asset('/')}}assets/img/blog-1.jpg" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Product name</h4>
                                <p >Price: 5000tk</p>
                                <a href="" class="btn btn-outline-info">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="card bg-dark text-white">
                            <img src="{{asset('/')}}assets/img/blog-2.jpg" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Product name</h4>
                                <p >Price: 5000tk</p>
                                <a href="" class="btn btn-outline-info">View</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
@include('includes/footer')
