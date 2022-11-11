<?php include "pages/includes/header.php"; ?>

<?php

?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-7 mx-auto">
                <div class="card bg-dark text-white fw-bold">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-9">
                            <div class="card-header fw-bold display-6 text-info">Add Product</div>
                        </div>
                    </div>
                    <div class="card-body">

                        <form action="action.php" method="post" enctype="multipart/form-data">
                            <h3 class="text-success text-center"> <?php echo isset($message) ? $message : '' ?> </h3>
                            <div class="row mb-3">
                                <div class="col-md-3">Product ID</div>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="product_id" readonly value=<?php echo++$lastProductID?> >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">Category Name</div>
                                <div class="col-md-9">
                                    <select name="category_id" id="" class="form-control ">
                                        <option value="" class="text-muted">Select a category</option>
                                        <?php foreach ($categories as $category) { ?>
                                            <option value=" <?php echo $category['category_id'] ?>"
                                                    class="text-dark"> <?php echo $category['name'] ?>  </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">Brand Name</div>
                                <div class="col-md-9">
                                    <select name="brand_id" id="" class="form-control ">
                                        <option value="" class="text-muted">Select a brand</option>
                                        <?php foreach ($brands as $brand) { ?>
                                            <option value=" <?php echo $brand['brand_id'] ?>"
                                                    class="text-dark"> <?php echo $brand['name'] ?>  </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <div class="col-md-3">Product Name</div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name"
                                           placeholder="Enter product name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">Product Price</div>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="price"
                                           placeholder="Enter product price">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-3">Product Description</div>
                                <div class="col-md-9">
                                    <textarea type="text" class="form-control" name="description" rows="2"
                                              placeholder="Write product description"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">Product Image</div>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="image" accept="image/*" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <input type="submit" name="btn" value="Add Product"
                                           class="btn btn-outline-info w-100">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "pages/includes/footer.php"; ?>
