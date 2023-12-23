<?php

include '../../inc/connection.php';


// GET CATEGORIES CHARGES
$query = "SELECT * FROM categories";
$top_wear = 0;
$bottom_wear = 0;
$other_wear = 0;
$bedsheets_wear = 0;
$pillow_wear = 0;
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
    if ($row['name'] == 'Top Wear') {
        $top_wear = $row['charges'];
    } else if ($row['name'] == 'Bottom Wear') {
        $bottom_wear = $row['charges'];
    } else if ($row['name'] == 'Pillow') {
        $pillow_wear = $row['charges'];
    } else if ($row['name'] == 'Bedsheets') {
        $bedsheets_wear = $row['charges'];
    } else {
        $other_wear = $row['charges'];
    }
}

// GET SUBMIT VALUES 
$user = $_SESSION['user']['id'];
$userName = $_SESSION['user']['name'];
$service = $_POST['service'];
$pick_drop = $_POST['pickDrop'];
$top = $_POST['top'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$bottom = $_POST['bottom'];
$pillow = $_POST['pillow'];
$bedsheets = $_POST['bedsheets'];
$other = $_POST['other'];

// CALCULATE CHARGES 
$top_wear_charges = $top * $top_wear;
$bottom_wear_charges = $bottom * $bottom_wear;
$other_charges = $other * $other_wear;
$pillow_charges = $pillow * $pillow_wear;
$bedsheets_charges = $bedsheets * $bedsheets_wear;

$total_charges = $top_wear_charges + $bottom_wear_charges + $other_charges + $pillow_charges + $bedsheets_charges;

$query = "INSERT INTO cloths (user_id,top_wear,pick_drop,bottom_wear,pillow,bedsheet,others,service,address,mobile,top_wear_charges,bottom_wear_charges,other_charges,pillow_charges,bedsheet_charges,total_charges) 
          VALUES('$user','$top','$pick_drop','$bottom','$pillow','$bedsheets','$other','$service','$address','$mobile','$top_wear_charges','$bottom_wear_charges','$other_charges','$pillow_charges','$bedsheets_charges','$total_charges')";

$result = mysqli_query($conn, $query);
$last_id = mysqli_insert_id($conn);
$message = $userName .  " send a laundry request.";
$q = "INSERT INTO notifications (cloth_id,message) 
          VALUES('$last_id','$message')";
mysqli_query($conn, $q);
if ($result > 0) {
    echo "<script>window.location='../../myLaundryRequest.php';</script>";
} else {
    echo mysqli_error($conn);
}
