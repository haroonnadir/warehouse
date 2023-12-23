<?php

include '../../inc/connection.php';

$id = $_POST['id'];
$password = $_POST['password'];

$query = "UPDATE users SET password='$password' WHERE id='$id'";
$result = mysqli_query($conn, $query);
if ($result > 0) {
    echo "<script>window.location='../../login.php?reset-password';</script>";
}
