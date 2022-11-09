<?php include "includes/header.php"; ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($brands as $brand) { ?>
                    <div class="col-md-4">
                        <div class="card bg-dark text-white mb-3">
                            <img src="assets/img/<?php echo $brand['brand_image']?>" alt="" height="250" class="card-img">
                            <div class="card-body">
                                <h3><?php echo $brand['brand_name']?></h3>
                                <a href="action.php?page=brand-product&&brand_id=<?php echo $brand['brand_id']?>" class="btn btn-outline-info">View</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

<?php include "includes/footer.php"; ?>