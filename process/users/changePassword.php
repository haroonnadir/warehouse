<?php

include '../../inc/connection.php';

$old = $_POST['old'];
$new = $_POST['new'];
$id = $_POST['user'];

$query = "SELECT * FROM users WHERE id= '$id'";
$rs = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($rs);
$oldPassword = $row['password'];

if ($oldPassword == $old) {
    $query = "UPDATE users SET password='$new' WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    if ($result > 0) {
        echo "<script>window.location='../../profile.php?new-password';</script>";
    }
}else{
    echo "<script>window.location='../../changePassword.php?error';</script>";
}
