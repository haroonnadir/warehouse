<?php

include '../inc/connection.php';

$id = $_POST['id'];
$name = $_POST['name'];
$password = $_POST['password'];
$address = $_POST['address'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];



    $query = "UPDATE users SET name='$name',email='$email',password='$password',address='$address',mobile='$mobile' WHERE id='$id'";

$rs = mysqli_query($conn, $query);
if ($rs > 0) {
    echo "<script>window.location='../profile.php?update';</script>";
} else {
    echo mysqli_error($conn);
}
