<?php include "includes/header.php"; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
            <div class="col-md-3">
                <div class="card bg-dark text-white mb-3">
                    <img src="assets/img/<?php echo $product['image']?>" alt="" height="250" class="card-img">
                    <div class="card-body">
                        <h3><?php echo $product['name']?></h3>
                        <h5>Tk. <?php echo $product['price']?></h5>
                        <a href="action.php?page=product-details&&id=<?php echo $product['id'] ?>" class="btn btn-outline-info">More details</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include "includes/footer.php"; ?>