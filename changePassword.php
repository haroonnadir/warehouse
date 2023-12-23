<?php include 'inc/header.php';

$user = $_SESSION['user']['id'];

?>

<div class="container">
    <?php
    if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                <use xlink:href="#exclamation-triangle-fill" />
            </svg>
            <strong>Error!</strong> Old Password wrong, please enter correct old password.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>

    <div class="row mt-5">
        <div class="offset-md-3 col-md-6 ">
            <main class="form-signin">
                <form action="process/users/changePassword.php" method="post">
                    <h1 class="h3 mb-3 fw-normal">Change Password</h1>
                    <input type="hidden" name="user" value="<?= $user ?>">
                    <div class="form-floating mt-2">
                        <input type="password" class="form-control" name="old" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Old Password</label>
                    </div>
                    <div class="form-floating mt-2">
                        <input type="password" class="form-control" name="new" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">New Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Update Password</button>
                </form>
            </main>
        </div>
    </div>
</div>

<?php include 'inc/footer.php'; ?>