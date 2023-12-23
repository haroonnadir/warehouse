<?php include 'inc/header.php';

$id = $_GET['id'];

$query = "SELECT * FROM cloths WHERE id ='$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

?>

<div class="container mt-5">
    <h2 class="mb-5">Update Laundry Form</h2>
    <form action="process/laundry/updateLaundry.php" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div class="mb-3 row">
            <label for="staticName" class="col-sm-2 col-form-label">Top Wear</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="staticName" name="top" value="<?=$row['top_wear']?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticBottomWear" class="col-sm-2 col-form-label">Bottom Wear</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="staticBottomWear" name="bottom"  value="<?=$row['bottom_wear']?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPillow" class="col-sm-2 col-form-label">Pillow</label>
            <div class="col-sm-6">
                <input type="pillow" class="form-control" id="inputPillow" name="pillow"  value="<?=$row['pillow']?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputBedsheets" class="col-sm-2 col-form-label">Bedsheets</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="inputBedsheets" name="bedsheets"  value="<?=$row['bedsheet']?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputOther" class="col-sm-2 col-form-label">Other</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="inputOther" name="other"  value="<?=$row['others']?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputMobile" class="col-sm-2 col-form-label">Mobile</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="inputMobile" name="mobile"  value="<?=$row['mobile']?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPickDrop" class="col-sm-2 col-form-label">Pick Drop Date</label>
            <div class="col-sm-6">
                <input type="date" class="form-control" id="inputPickDrop" name="pickDrop"  value="<?=$row['pick_drop']?>">
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
                <input type="text" class="form-control" id="inputAddress" name="address"  value="<?=$row['address']?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-6">
                <input type="submit" class="btn btn-primary btn-block" value="Update Send Request">
            </div>
        </div>
    </form>
</div>

<?php include 'inc/footer.php' ?>