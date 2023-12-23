<?php include 'inc/header.php'; ?>

<div class="container">
    <?php
    if (isset($_GET['reset-password'])) { ?>
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                <use xlink:href="#exclamation-triangle-fill" />
            </svg>
            <strong>Success!</strong> Password Updated.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>

     <?php
    if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                <use xlink:href="#exclamation-triangle-fill" />
            </svg>
            <strong>Error!</strong> Invalid email or password.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>

    <?php
    if (isset($_GET['success'])) { ?>
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                <use xlink:href="#exclamation-triangle-fill" />
            </svg>
            <strong>Success!</strong> Registration Successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>

    <div class="row mt-5">
        <div class="offset-md-3 col-md-6 ">
            <main class="form-signin">
                <form action="process/users/loginAction.php" method="post">
                    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                    <div class="form-floating">
                        <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mt-2">
                        <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Sign in</button>
                </form>
                <p class="mt-2">Don't have an account? <a href="register.php">Sign up</a></p>
                <p class="mt-2">Forget Password? <a href="forgetPassword.php">Forget</a></p>
            </main>
        </div>
    </div>
</div>

<?php include 'inc/footer.php'; ?>