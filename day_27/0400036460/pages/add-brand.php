<?php include "includes/header.php"; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-7 mx-auto">
                <div class="card bg-dark text-white fw-bold">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-9"><div class="card-header fw-bold display-6 text-info">Add Brand</div></div>
                    </div>
                    <div class="card-body">

                        <form action="action.php" method="post" enctype="multipart/form-data">
                            <h3 class="text-success text-center" > <?php echo isset($message)?  $message : '' ?> </h3>
                            <div class="row mb-3">
                                <div class="col-md-3">Brand ID</div>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="brand_id" readonly value=<?php echo++$lastBrandID?> >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">Brand Name</div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name" placeholder="Enter brand name"  >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">Brand Image</div>
                                <div class="col-md-9">
                                      <input type="file" class="form-control" name="image"  accept="image/*"  required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <input type="submit" name="btn" value="Add Brand" class="btn btn-outline-info w-100" >
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "includes/footer.php"; ?>
