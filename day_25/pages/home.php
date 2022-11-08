<?php include "pages/includes/header.php"; ?>

<h1 class=" text-center   mt-5"> Home Page</h1>
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">All Product</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-striped">
                            <thead>
                           <tr>
                               <th>#</th>
                               <th>Category Name</th>
                               <th>Product Name</th>
                               <th>Product Price</th>
                               <th>Product Description</th>
                               <th>Product Image</th>
                           </tr>
                            </thead>
                            <tbody>


                            <?php $i=1;?>
                            <?php foreach ($products as $product) {?>
                                <tr>
                                    <td><?php echo $i++ ?></td>
                                    <td><?php echo ($categories[--$product['category_id']]['name']) ?></td>
                                    <td><?php echo $product['name'] ?></td>
                                    <td><?php echo $product['price'] ?></td>
                                    <td><?php echo $product['description'] ?></td>
                                    <td><img src="<?php echo $product['image'] ?>" alt="" style="height:50px"></td>
                                </tr>
                            <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "pages/includes/footer.php"; ?>
