<?php include 'inc/header.php';

$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

?>

<div class="container mt-5">
    <h2 class="mb-5">Update User</h2>
    <form action="process/updateUser.php" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div class="mb-3 row">
            <label for="staticName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="staticName" name="name" value="<?= $row['name'] ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="staticEmail" name="email" value="<?= $row['email'] ?>">
            </div>
        </div>
        <div class=" mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-6">
                <input type="password" class="form-control" id="inputPassword" name="password" value="<?= $row['password'] ?>">
            </div>
        </div>
        <div class=" mb-3 row">
            <label for="inputMobile" class="col-sm-2 col-form-label">Mobile No</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="inputMobile" name="mobile" value="<?= $row['mobile'] ?>">
            </div>
        </div>
        <div class=" mb-3 row">
            <label for="inputAddress" class="col-sm-2 col-form-label">Adress</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="inputAddress" name="address" value="<?= $row['address'] ?>">
            </div>
        </div>
        <div class=" mb-3 row">
            <label for="" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-6">
                <input type="submit" class="btn btn-primary btn-block" value="Update">
            </div>
        </div>
    </form>
</div>

<?php include 'inc/footer.php' ?>