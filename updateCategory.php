<?php include 'inc/header.php';

$id = $_GET['id'];
$query = "SELECT * FROM categories WHERE id='$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

?>

<div class="container mt-5">
    <h2 class="mb-5">Update Charges</h2>
    <form action="process/category/updateCategory.php" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div class="mb-3 row">
            <label for="staticName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-6">
                <input readonly type="text" class="form-control" id="staticName" name="name" value="<?= $row['name'] ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticCharges" class="col-sm-2 col-form-label">Charges</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="staticCharges" name="charges" value="<?= $row['charges'] ?>">
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