<?php include "includes/header.php" ?>


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-7 mx-auto">
                <div class="card bg-dark text-white fw-bold">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-9"><div class="card-header fw-bold display-6 text-info">Add Student</div></div>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <div class="col-md-3">Category Name</div>
                                <div class="col-md-9">
                                    <select name="category_id" id="" class="form-control text-muted">
                                        <option value=""  >Select a category</option>
                                        <?php foreach ($categories as $category){?>
                                        <option value=" <?php echo $category['id']?>" class="text-dark" > <?php echo $category['name']?>  </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">Name</div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name" >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">Email</div>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email"  >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">Phone</div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="phone" placeholder="Your Phone"  >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">Address</div>
                                <div class="col-md-9">
                                    <textarea type="text" class="form-control" name="address" rows="2" placeholder="Your Address"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">Image</div>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="image"  accept="image/*"  required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <input type="submit" value="Add Student" class="btn btn-outline-info w-100" name="add_student">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include "includes/footer.php" ?>
