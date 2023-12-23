<?php

include '../../inc/connection.php';

$email = $_POST['email'];
$password = $_POST['password'];
if ($email == 'admin@admin.com' && $password == 'admin') {
  $_SESSION['admin'] = 'admin';
  echo "<script>window.location='../../index.php';</script>";
} else {
  $sql = "SELECT * FROM users WHERE Email = '$email' AND Password = '$password' ";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $status = $row['status'];
    if ($status == 'Pending' || $status == 'Block') {
      echo "<script>alert('Your registration request status is $status ');window.location='../../login.php';</script>";
    } else {
      $_SESSION['user'] = array(
        'id' => $row['id'],
        'name' => $row['name'],
        'email' => $row['email']
      );
    }
    
    echo "<script>window.location='../../profile.php';</script>";
  } else {
    echo "<script>window.location='../../login.php?error=error';</script>";
  }
}
