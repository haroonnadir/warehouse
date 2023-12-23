<?php include 'inc/header.php';

$query = "SELECT * FROM categories";
$categories = null;
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $categories[] = $row;
}
?>

<div class="mx-4">
    <h1>Categories List</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Charges</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!is_null($categories)) {
                foreach ($categories as $category) { ?>
                    <tr>
                        <td><?= $category['name'] ?></td>
                        <td><?= $category['charges'] ?></td>
                        <td>
                            <a href="updateCategory.php?id=<?= $category['id'] ?>" class="btn btn-success btn-sm">Update Charges</a>
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