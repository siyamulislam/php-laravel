<?php include "includes/header.php" ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach($products as $product) { ?>

                    <div class="col-md-4">
                        <div class="card bg-dark text-white">
                            <img src="<?php echo $product['image'] ?>" alt="" class="card-img" height="300">
                            <div class="card-body">
                                <h3><?php echo $product['name'] ?></h3>
                                <h5>Tk. <?php echo $product['price'] ?></h5>
<!--                                <small>--><?php //echo substr($product['description'],0,38)." ..." ?><!--</small>-->
                                 <a href=" " class="btn btn-outline-info d-block mb-2">Add to Cart</a>

                                <a href="action.php?page=product-detail&id=<?php echo $product['price']?>" class="btn btn-outline-info d-block">More details</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

<?php include "includes/footer.php" ?>