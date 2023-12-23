<?php include 'inc/header.php';

$st = '';
if (isset($_GET['status'])) {
    $st = $_GET['status'];
}

$query = '';
if ($st == 'Approve') {
    $query = "SELECT * FROM users WHERE status='$st'";
} else if ($st == 'Block') {
    $query = "SELECT * FROM users WHERE status='$st'";
} else {
    $query = "SELECT * FROM users";
}

$users = null;
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $users[] = $row;
}
?>

<div class="mx-4">
    <h1>Users List</h1>
    <table class="table table-striped">
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
            <?php if (!is_null($users)) {
                foreach ($users as $user) { ?>
                    <tr>
                        <td><?= $user['name'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['mobile'] ?></td>

                        <td><?= $user['address'] ?></td>
                        <td>
                            <?php $status = $user['status'];
                            if ($status == 'Approve') { ?>
                                <a href="process/users/changeStatus.php?id=<?= $user['id'] ?>&mode=Block" class="btn btn-danger btn-sm">Block</a>
                            <?php } else { ?>
                                <a href="process/users/changeStatus.php?id=<?= $user['id'] ?>&mode=Approve" class="btn btn-success btn-sm">Approve</a>
                            <?php } ?>
                        </td>
                    </tr>
                <?php } ?>
            <?php } else { ?>
                <tr>
                    <td colspan="10" class="text-center">No Record </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</div>



<?php include 'inc/footer.php'; ?>