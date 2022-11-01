<?php include "header.php" ?>


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card bg-dark text-white fw-bold">
                    <div class="card-header text-center fw-bold display-6 text-info">Even & Odd Generator</div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="row mb-3">
                                <div class="col-md-3">Start Number</div>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="start_number" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">End Number</div>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="end_number" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">Action</div>
                                <div class="col-md-9 text-center fs-5">
                                    <label for=""><input type="radio" name="action" value="even"> Even</label>
                                    <label for=""><input type="radio" name="action" value="odd"> Odd</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <input type="submit" value="Make Result" class="btn btn-outline-info w-100" name="even_odd_btn">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">Result</div>
                                <div class="col-md-9">
                                    <textarea type="text" class="form-control" rows="5" readonly><?php echo $result ?></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include "footer.php" ?>
