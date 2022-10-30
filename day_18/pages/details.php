<?php include 'includes/header.php' ?>

<section class="py-5">
    <div class="container">
        <div class="row">

            <div class="col-md-8 mx-auto">
                <div class="card">
                    <img src="assets/img/<?php echo  $details['img']?>" class="card-img-top" alt="">
                  <div class="card-body">
                      <h3><?php echo  $details['title']?></h3>
                      <p><?php echo  $details['description']?></p>
                  </div>
                </div>
            </div>

        </div>
    </div>

</section>


<?php include 'includes/footer.php' ?>