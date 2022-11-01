<?php include "includes/header.php" ?>


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card bg-dark text-white fw-bold">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-9"><div class="card-header fw-bold display-6 text-info">Number Series</div></div>
                    </div>

                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="row mb-3">
                                <div class="col-md-3">Starting Number</div>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="start_number" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">Ending Number</div>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="end_number" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">Result</div>
                                <div class="col-md-9">
                                    <textarea type="text" class="form-control" rows="5" readonly><?php echo $result ?></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <input type="submit" value="Make Result" class="btn btn-outline-info w-100" name="series_btn">
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
