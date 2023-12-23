<?php include 'inc/header.php';

$email = $_POST['email'];
$mobile = $_POST['mobile'];
$query = "SELECT * FROM users WHERE email= '$email' AND mobile= '$mobile'";
$rs = mysqli_query($conn, $query);
if (mysqli_num_rows($rs) > 0) {

    $row  = mysqli_fetch_array($rs);
    $id = $row['id'];

?>
    <div class="container">
        <h1 class="mb-2">Set New Password</h1>
        <div class="row mt-5">
            <div class="offset-md-3 col-md-6 ">
                <main class="form-signin">
                    <form action="process/users/setNewPassword.php" method="post">
                        <div class="form-floating mt-2">
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">New Password</label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Set New password</button>
                    </form>

                </main>
            </div>
        </div>
    </div>
<?php } else {
    echo "<script>window.location='forgetPassword.php?error';</script>";
}

?>






<?php include 'inc/footer.php'; ?>