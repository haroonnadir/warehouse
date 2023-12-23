<?php

include '../../inc/connection.php';

$id = $_GET['id'];

$query = "UPDATE notifications SET status='seen' WHERE id='$id'";
$result = mysqli_query($conn, $query);
if ($result > 0) {
    echo "<script>window.location='../../notifications.php';</script>";
}
