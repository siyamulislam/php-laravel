@extends('master')
@section('title')
   Home
@endsection


@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($blogs as $blog) { ?>
                <div class="col-md-3">
                    <div class="card bg-dark text-white mb-3">
                        <img src="<?php echo $blog['image']?>" alt="" height="250" class="card-img">
                        <div class="card-body">
                            <h6><?php echo $blog['title']?></h6>
                            <h6>Category: <?php echo $blog['category_id']?></h6>
{{--                            <a href="action.php?page=product-details&&id=<?php echo $blog['product_id'] ?>" class="btn btn-outline-info">More details</a>--}}
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
@endsection
