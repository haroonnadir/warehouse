<?php include 'inc/header.php';

$user = $_SESSION['user']['id'];

$query = "SELECT * FROM cloths WHERE user_id ='$user'";
$cloths = null;
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $cloths[] = $row;
}
?>

<div class="mx-4">
    <h1>My Laundry List</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Top Wear</th>
                <th>Bottom Wear</th>
                <th>Pillow</th>
                <th>Bedsheets</th>
                <th>Other Cloths</th>
                <th>Total Charges</th>
                <th>Pick/Drop Date</th>
                <th>Service</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!is_null($cloths)) {
                foreach ($cloths as $cloth) { ?>
                    <tr>
                        <td>
                            <?= $cloth['top_wear'] ?> <br>(Charges: <?= $cloth['top_wear_charges'] ?>)
                        </td>
                        <td>
                            <?= $cloth['bottom_wear'] ?> <br>(Charges: <?= $cloth['bottom_wear_charges'] ?>)
                        </td>
                        <td>
                            <?= $cloth['pillow'] ?> <br>(Charges: <?= $cloth['pillow_charges'] ?>)
                        </td>
                        <td>
                            <?= $cloth['bedsheet'] ?> <br>(Charges: <?= $cloth['bedsheet_charges'] ?>)
                        </td>
                        <td>
                            <?= $cloth['others'] ?> <br>(Charges: <?= $cloth['other_charges'] ?>)
                        </td>
                        <td><?= $cloth['total_charges'] ?> Rs.</td>
                        <td><?= $cloth['pick_drop'] ?></td>
                        <td><?= $cloth['service'] ?></td>
                        <td><?= $cloth['mobile'] ?></td>
                        <td><?= $cloth['address'] ?></td>
                        <td><?= $cloth['status'] ?></td>
                        <td>
                            <?php if ($cloth['status'] == 'Pending') { ?>
                                <a href="updateLaundry.php?id=<?= $cloth['id'] ?>" class="btn btn-warning btn-sm">Update</a>
                            <?php } ?>
                            <a href="process/laundry/deleteLaundry.php?id=<?= $cloth['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
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