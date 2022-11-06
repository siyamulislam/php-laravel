<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>day19-php6</title>

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark py-3 shadow-lg">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav">
            <li><a href="action.php?page=home" class="nav-link text-uppercase fw-bold text-light shadow-lg">Home</a></li>
            <li><a href="action.php?page=add-student" class="nav-link text-uppercase fw-bold text-light shadow-lg">Add Student</a></li>
			<li class="dropdown">
				<a href="" class="dropdown-toggle nav-link text-uppercase fw-bold text-light shadow-lg" data-bs-toggle="dropdown">Gender</a>
				<ul class="dropdown-menu">

					<?php foreach ($categories as $category) { ?>

					<li><a href="" class="dropdown-item"><?php echo $category['name']; ?></a></li>

                    <?php } ?>

				</ul>
			</li>
<!--	        <li class="nav-item dropdown">-->
<!--		        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
<!--			        Dropdown link-->
<!--		        </a>-->
<!--		        <ul class="dropdown-menu">-->
<!--			        <li><a class="dropdown-item" href="#">Action</a></li>-->
<!--			        <li><a class="dropdown-item" href="#">Another action</a></li>-->
<!--			        <li><a class="dropdown-item" href="#">Something else here</a></li>-->
<!--		        </ul>-->
<!--	        </li>-->
        </ul>
    </div>
</nav>
