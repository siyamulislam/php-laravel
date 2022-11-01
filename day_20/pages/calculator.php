<?php include "includes/header.php" ?>


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-7 mx-auto">
                <div class="card bg-dark text-white fw-bold">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-9"><div class="card-header fw-bold display-6 text-info">Calculator</div></div>
                    </div>

                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="row mb-3">
                                <div class="col-md-3">First Number</div>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="first_number" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">Second Number</div>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="second_number" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">Action</div>
                                <div class="col-md-9 fs-4 text-center">
                                    <label><input type="radio" checked name="action" value="+"/> + </label>
                                    <label><input type="radio" name="action" value="-"/> - </label>
                                    <label><input type="radio" name="action" value="*"/> * </label>
                                    <label><input type="radio" name="action" value="/"/> / </label>
                                    <label><input type="radio" name="action" value="%"/> % </label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <input type="submit" value="Get Result" class="btn btn-outline-info w-100"
                                           name="calculate_btn">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">Result</div>
                                <div class="col-md-9">
                                    <input type="text" value="<?php echo $result ?>" class="form-control" readonly/>
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
