<?php include "includes/header.php"; ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mx-auto">
                    <div class="card bg-dark text-white">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9"><div class="card-header display-6 text-info fw-bold">Get Full Name</div></div>
                        </div>

                        <div class="card-body">
                            <form action="action.php" method="post">
                                <div class="row mb-3">
                                    <label for="firstName" class="col-md-3 fw-bold">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="f_name" class="form-control" id="firstName"
                                               placeholder="First Name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="lastName" class="col-md-3 fw-bold">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="l_name" class="form-control" id="lastName"
                                               placeholder="Last Name">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fw-bold">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" value="<?php echo $result ?>" class="form-control" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="full_name_btn" class="btn btn-outline-info w-100"
                                               value="Get Full Name">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

<?php include "includes/footer.php"; ?>