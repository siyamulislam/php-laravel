<?php
include 'includes/header.php';
?>


    <h1>Products</h1>
<!--    <section class="py-5">-->
<!--    <div class="container">-->
<!--    <div class="row">-->
<!--    --><?php
//
//            foreach ($allProducts as $product){
//
//
//    }
//    ?>
<!--    </div>-->
<!--    </div>-->
<!---->
<!--    </section>-->

    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($allProducts as $product) { ?>
                    <div class="col-md-4 mt-2">
                        <div class="card">
                            <img src="<?php echo $product['image'] ?>" alt="" class="card-img-top h-300">
                            <div class="card-body">
                                <h3><?php echo $product['name'] ?></h3>
                                <p>price: <?php echo $product['price'] ?> BDT</p>
                                <a href="" class="btn btn-outline-warning">View</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <?php
    include 'includes/footer.php';
    ?>