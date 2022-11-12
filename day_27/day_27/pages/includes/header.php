<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php if (isset($_SESSION['id'])){?>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
        <a href="" class="text-uppercase navbar-brand"> Logo</a>
        <ul class="navbar-nav">
            <li><a href="action.php?page=home" class="nav-link">Home</a></li>
            <li><a href="action.php?page=calculator" class="nav-link">Calculator</a></li>
            <li><a href="action.php?page=word-count" class="nav-link">Word Count</a></li>
            <li><a href="action.php?page=series" class="nav-link">Series</a></li>
            <li><a href="action.php?page=file-upload" class="nav-link">File Upload</a></li>
            <li><a href="action.php?page=file-rw" class="nav-link">File R/W</a></li>
<!--            <li><a href="action.php?page=login" class="nav-link">Login</a></li>-->
            <li><a href="action.php?page=logout" class="nav-link">Logout</a></li>
        </ul>
    </div>
</nav>
<?php } ?>