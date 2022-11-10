<?php include 'includes/header.php' ?>
<?php if (!isset($_SESSION['id'])){  header("Location: action.php? page=login");} ?>

    <h1 class="text-center">This is File Upload page</h1>


<?php include 'includes/footer.php' ?>