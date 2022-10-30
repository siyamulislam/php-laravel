<?php include 'includes/header.php' ?>



<section class="py-5">
         <div class="container">
             <div class="row">
                 <?php foreach ($blogs as $blog) {?>

                 <div class="col-md-4 mb-2">
                     <div class="card h-100">
                         <img src="assets/img/<?php  echo $blog['img']; ?>" alt="" class="card-img-top h-250">
                         <div class="card-body">
                            <h3><?php echo $blog['title'] ?> </h3>
<!--                             <p >--><?php //echo substr($blog['description'],0, 220)?><!--</p>-->
                             <p ><?php echo substr_replace($blog['description'],'...', 220)?></p>
                             <a href="action.php?page=details&&id=<?php echo $blog['id'] ?>" class="btn btn-outline-success float-end">View</a>
                         </div>
                     </div>
                 </div>

                 <?php } ?>
             </div>
         </div>

</section>

<?php include 'includes/footer.php' ?>