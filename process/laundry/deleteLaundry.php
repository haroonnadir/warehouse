<?php

include '../../inc/connection.php';

$id = $_GET['id'];

$query = "DELETE FROM cloths  WHERE id= '$id'";

$result = mysqli_query($conn, $query);

$session = '';
if (isset($_SESSION['user'])) {
    $session = 'user';
} else {
    $session = 'admin';
}

if ($result > 0) {
    if ($session == 'user') {
        echo "<script>window.location='../../myLaundryRequest.php';</script>";
    } else {
        echo "<script>window.location='../../laundryRequest.php';</script>";
    }
} else {
    echo "ERROR";
}
