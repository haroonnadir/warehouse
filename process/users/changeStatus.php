<?php

include '../../inc/connection.php';

$id = $_GET['id'];
$mode = $_GET['mode'];

$status = $mode;

$query = "UPDATE users SET status='$status' WHERE id='$id'";
$result = mysqli_query($conn, $query);
if ($result > 0) {
    echo "<script>window.location='../../users.php?status=$status';</script>";
}
