<?php include "includes/header.php"; ?>

    <section class="py-5">
        <div class="container">
            <div class="row py-5 bg-dark">
                <div class="col-md-6">
                    <div class="card">
                        <img src="<?php echo $singleProduct['image']?>" alt="" class="" height="500">
                    </div>
                </div>
                <div class="col-md-6 text-white">
                    <h1 class="display-2"><?php echo $singleProduct['name']  ?></h1>
                    <h4 class="display-5">TK. <?php echo $singleProduct['price'] ?></h4>
                    <p class="fs-5"><?php echo  $singleProduct['description']?></p>
                    <a href="" class="btn btn-outline-info d-block">Add to Cart</a>
                </div>
            </div>
        </div>
    </section>

<?php include "includes/footer.php"; ?>