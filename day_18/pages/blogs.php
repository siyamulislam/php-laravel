<?php include 'includes/header.php' ?>



<section class="py-5">
         <div class="container">
             <div class="row">
                 <?php foreach ($blogs as $blog) {?>

                 <div class="col-md-4 mb-2">
                     <div class="card">
                         <img src="assets/img/<?php  echo $blog['img']; ?>" alt="" class="card-img-top h-250">
                         <div class="card-body">
                            <h3><?php echo $blog['title'] ?> </h3>
                             <p><?php echo $blog['description']?></p>
                             <a href="" class="btn btn-outline-success float-end">View</a>
                         </div>
                     </div>
                 </div>

                 <?php } ?>
             </div>
         </div>

</section>

<?php include 'includes/footer.php' ?>