<?php include 'inc/header.php';

$query = '';

if (isset($_GET['search'])) {
    $search = '';
    if($_GET['search'] == 'search-by-year'){
        $search = $_POST['year'];
        $query = "SELECT * FROM cloths WHERE pick_drop LIKE '$search-%'";
    }else if($_GET['search'] == 'search-by-month'){
        $search = $_POST['month'];
        $query = "SELECT * FROM cloths WHERE pick_drop LIKE '$search-%'";
    }else{
        $search = $_POST['date'];
        $query = "SELECT * FROM cloths WHERE pick_drop = '$search'";
    }
    
} else {
    $query = "SELECT * FROM cloths";
}


$cloths = null;
$result = mysqli_query($conn, $query);
$rowcount = mysqli_num_rows($result);
while ($row = mysqli_fetch_assoc($result)) {
    $cloths[] = $row;
}
?>

<div class="mx-4">
    <div>
        <h1>Laundry Requests</h1>
    </div>
    <div class="d-flex justify-content-between">

        <div>
            <div class="input-group mb-3">
                <form action="laundryRequests.php?search=search-by-year" method="post">
                    <div class="d-flex justify-content-between">
                        <label for="" class="mx-2">Search by Year: </label>
                        <select name="year" class="form-control">
                            <?php for ($i = 2020; $i <= 2030; $i++) { ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                        </select>
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div>
            <div class="input-group mb-3">
                <form action="laundryRequests.php?search=search-by-month" method="post">
                    <div class="d-flex justify-content-between">
                        <label for="" class="mx-2">Search by Month: </label>
                        <input type="month" class="form-control" name="month">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div>
            <div class="input-group mb-3">
                <form action="laundryRequests.php?search=search-by-date" method="post">
                    <div class="d-flex justify-content-between">
                        <label for="" class="mx-2">Search by Date: </label>
                        <input type="date" class="form-control" name="date">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div>
        <h1>Total Count: <?= $rowcount ?></h1>
    </div>

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
                            <?php
                            $status = $cloth['status'];
                            if ($status == 'Pending') { ?>
                                <a href="process/laundry/changeStatus.php?id=<?= $cloth['id'] ?>" class="btn btn-warning btn-sm">Accept</a>
                            <?php } ?>
                            <a href="process/laundry/deleteLaundry.php?id=<?= $cloth['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            <?php } else { ?>
                <tr>
                    <td colspan="12" class="text-center">No Record </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</div>



<?php include 'inc/footer.php'; ?>