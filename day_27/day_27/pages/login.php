<?php include "includes/header.php" ?>
<?php if (isset($_SESSION['id'])){  header("Location: action.php? page=home");} ?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card bg-dark text-white fw-bold">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-9"><div class="card-header fw-bold display-6 text-info border-0">Login</div></div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-danger text-center"> <?php echo isset($authResult)? $authResult:""?></p>
                            <form action="action.php" method="post">
                                <div class="row mb-3">
                                    <div class="col-md-3">Email</div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">Password</div>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" value="Login" class="btn btn-outline-info w-100" name="btn">
                                        <div class="mt-2 text-center ">
                                            <a href="" class="text-muted">
                                                <small>New user? Register now</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>


<?php include "includes/footer.php"; ?>