<?php
include 'includes/header.php';
?>


<h1>Products</h1>
<section class="py-5">
    <div class="container">
        <div class="row">
            <?php

            foreach ($allProducts as $product){ ?>


            <div class="col-md-4">
                <div class="card">
                    <img src="assets/img/team-1.jpg" alt="" class="card-img-top h-250 ">
                   <div class="card-body">
                       <h3>WHS</h3>
                       <p> Price:500</p>
                       <a href=""class="btn btn-outline-success">View</a>

                   </div>
                </div>
            </div>
                }

                ?>
        </div>
    </div>

</section>
<?php
include 'includes/footer.php';
?>