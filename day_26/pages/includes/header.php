<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panda Shop</title>

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark py-0 shadow-lg">
    <div class="container">
        <a href="" class="navbar-brand fw-bold"><img src="assets/img/logo.jpg" alt="" width="50" class="img-fluid "></a>
        <ul class="navbar-nav">
            <li><a href="action.php?page=home" class="nav-link ">Home</a></li>
            <li><a href="action.php?page=add-product" class="nav-link  ">Add Product</a></li>
			<li class="dropdown">
				<a href="" class="dropdown-toggle nav-link " data-bs-toggle="dropdown">Categories</a>
				<ul class="dropdown-menu">

					<?php foreach ($categories as $category) { ?>

					<li><a href="action.php?page=category&id=<?php echo $category['id'] ?>" class="dropdown-item"><?php echo $category['name']; ?></a></li>

                    <?php } ?>

				</ul>
			</li>
        </ul>
    </div>
</nav>
