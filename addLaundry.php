<?php include 'inc/header.php';

$query = "SELECT * FROM categories";
$top = 0;
$bottom = 0;
$other = 0;
$bedsheets = 0;
$pillow = 0;
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
    if ($row['name'] == 'Top Wear') {
        $top = $row['charges'];
    } else if ($row['name'] == 'Bottom Wear') {
        $bottom = $row['charges'];
    } else if ($row['name'] == 'Pillow') {
        $pillow = $row['charges'];
    } else if ($row['name'] == 'Bedsheets') {
        $bedsheets = $row['charges'];
    } else {
        $other = $row['charges'];
    }
}

?>

<div class="container mt-5">
    <h2 class="mb-5">Laundry Form</h2>
    <form action="process/laundry/addLaundry.php" method="post">
        <div class="mb-3 row">
            <label for="staticName" class="col-sm-2 col-form-label">Top Wear</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" value="0" id="staticName" name="top">
            </div>
            <label for="" class="col-sm-2 col-form-label"><span style="color:red;">Charges: <?= $top ?></span></label>
        </div>
        <div class="mb-3 row">
            <label for="staticBottomWear" class="col-sm-2 col-form-label">Bottom Wear</label>
            <div class="col-sm-6">
                <input type="text" value="0" class="form-control" id="staticBottomWear" name="bottom">
            </div>
             <label for="" class="col-sm-2 col-form-label"><span style="color:red;">Charges: <?= $bottom ?></span></label>
        </div>
        <div class="mb-3 row">
            <label for="inputPillow" class="col-sm-2 col-form-label">Pillow</label>
            <div class="col-sm-6">
                <input type="pillow" value="0" class="form-control" id="inputPillow" name="pillow">
            </div>
             <label for="" class="col-sm-2 col-form-label"><span style="color:red;">Charges: <?= $pillow ?></span></label>
        </div>
        <div class="mb-3 row">
            <label for="inputBedsheets" class="col-sm-2 col-form-label">Bedsheets</label>
            <div class="col-sm-6">
                <input type="text" value="0" class="form-control" id="inputBedsheets" name="bedsheets">
            </div>
             <label for="" class="col-sm-2 col-form-label"><span style="color:red;">Charges: <?= $bedsheets ?></span></label>
        </div>
        <div class="mb-3 row">
            <label for="inputOther" class="col-sm-2 col-form-label">Other</label>
            <div class="col-sm-6">
                <input type="text" value="0" class="form-control" id="inputOther" name="other">
            </div>
             <label for="" class="col-sm-2 col-form-label"><span style="color:red;">Charges: <?= $other ?></span></label>
        </div>
        <div class="mb-3 row">
            <label for="inputMobile" class="col-sm-2 col-form-label">Mobile</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="inputMobile" name="mobile">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPickDrop" class="col-sm-2 col-form-label">Pick Drop Date</label>
            <div class="col-sm-6">
                <input type="date" class="form-control" id="inputPickDrop" name="pickDrop">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPickDrop" class="col-sm-2 col-form-label">Service</label>
            <div class="col-sm-6">
                <select name="service" class="form-control" id="">
                    <option value="Pickup">Pickup</option>
                    <option value="Drop">Drop</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="inputAddress" name="address">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-6">
                <input type="submit" class="btn btn-primary btn-block" value="Send Request">
            </div>
        </div>
    </form>
</div>

<?php include 'inc/footer.php' ?>