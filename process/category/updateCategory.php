<?php

include '../../inc/connection.php';

$id = $_POST['id'];
$name = $_POST['name'];
$charges = $_POST['charges'];

$query = "UPDATE categories SET name='$name',charges='$charges' WHERE id='$id'";
$result = mysqli_query($conn, $query);

if ($result > 0) {
    echo "<script>window.location='../../categories.php';</script>";
} else {
    echo mysqli_error($conn);
}
