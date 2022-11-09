<?php include "header.php"; ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($categories as $category) { ?>
                    <div class="col-md-3">
                        <div class="card bg-dark text-white mb-3">
                            <img src="assets/img/<?php echo $category['image']?>" alt="" height="250" class="card-img">
                            <div class="card-body">
                                <h3><?php echo $category['name']?></h3>
                                <a href="action.php?page=category-product&&category_id=<?php echo $category['id']?>" class="btn btn-outline-info">View
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

<?php include "footer.php"; ?>