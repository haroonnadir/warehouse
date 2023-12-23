<?php include 'inc/header.php';


if (isset($_SESSION['user'])) {
    $id = $_SESSION['user']['id'];
    $query = "SELECT * FROM users WHERE id= '$id'";
}

$rs = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($rs);

?>
<div class="container">
    <?php
    if (isset($_GET['new-password'])) { ?>
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                <use xlink:href="#exclamation-triangle-fill" />
            </svg>
            <strong>Success!</strong> Password changed successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>
    <h1 class="mb-2">My Profile</h1>
    <div class="col-md-12">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['mobile'] ?></td>
                   
                    <td><?= $row['address'] ?></td>
                    
                    <td>
                        <a href="updateUser.php?id=<?= $row['id'] ?>" class="btn btn-xs btn-warning">Update</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>



<?php include 'inc/footer.php'; ?>