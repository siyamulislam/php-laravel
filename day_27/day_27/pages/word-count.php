<?php include "includes/header.php" ?>


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-7 mx-auto">
                <div class="card bg-dark text-white fw-bold">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-9"><div class="card-header fw-bold display-6 text-info">Word Count</div></div>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="row mb-3">
                                <label for="words" class="col-md-3 fw-bold">Enter Word</label>
                                <div class="col-md-9">
                                    <textarea type="text" name="wordsData" class="form-control" id="wordsData" rows="2"  ></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-3">Result</div>
                                <div class="col-md-9">
                                    <label for="result" class=""><readonly><?php echo $result ?></label>

                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <input type="submit" value="Make Result" class="btn btn-outline-info w-100" name="word_btn">
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
