<?php

include '../../inc/connection.php';


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];

$query = "INSERT INTO users (name,email,password,address,mobile,status) 
          VALUES('$name','$email','$password','$address','$mobile','Pending')";

$result = mysqli_query($conn, $query);

if ($result > 0) {
    echo "<script>window.location='../../login.php';</script>";
} else {
    echo "ERROR";
}
