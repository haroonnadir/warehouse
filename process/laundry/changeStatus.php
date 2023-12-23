<?php

include '../../inc/connection.php';

$id = $_GET['id'];

$query = "UPDATE cloths SET status='Accept' WHERE id='$id'";
$result = mysqli_query($conn, $query);
if ($result > 0) {
    echo "<script>window.location='../../laundryRequests.php';</script>";
}
