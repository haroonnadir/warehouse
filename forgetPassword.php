<?php include 'inc/header.php'; ?>

<div class="container">
    <?php
    if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                <use xlink:href="#exclamation-triangle-fill" />
            </svg>
            <strong>Error!</strong> Invalid email or mobile no.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>
    <div class="row mt-5">
        <div class="offset-md-3 col-md-6 ">
            <main class="form-signin">
                <form action="setNewPassword.php" method="post">
                    <h1 class="h3 mb-3 fw-normal">Forget Password</h1>
                    <div class="form-floating">
                        <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mt-2">
                        <input type="text" class="form-control" name="mobile" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Mobile No</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Forget Password</button>
                </form>
            </main>
        </div>
    </div>
</div>

<?php include 'inc/footer.php'; ?>