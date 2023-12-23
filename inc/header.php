<?php
include 'connection.php';

$query = "SELECT * FROM notifications";
$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Laundry </title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
    <link rel="stylesheet" href="public/css/style.css">
    <link href="title.png" rel="icon" type="image/png" />
</head>

<body>

    <header class="p-3 mb-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">


                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="index.php" class="nav-link px-2 text-white">Laundry</a></li>

                    <?php if (isset($_SESSION['admin'])) { ?>
                        <li><a href="users.php" class="nav-link px-2 text-white">Users</a></li>
                        <li><a href="categories.php" class="nav-link px-2 text-white">Categories</a></li>
                        <li><a href="laundryRequests.php" class="nav-link px-2 text-white">Laundry Requests</a></li>
                    <?php }  ?>

                    <?php if (isset($_SESSION['user'])) { ?>
                        <li><a href="addLaundry.php" class="nav-link px-2 text-white">Laundry Request</a></li>
                        <li><a href="myLaundryRequest.php" class="nav-link px-2 text-white">My Laundry Request</a></li>
                    <?php }  ?>
                </ul>

                <div class="text-end">
                    <?php if (isset($_SESSION['admin']) || isset($_SESSION['user'])) { ?>
                        <div class="dropdown text-end btn btn-primary">
                            <a href="#" class="d-block text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <label for="">Account</label>
                            </a>
                            <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                                <?php if (isset($_SESSION['user'])) { ?>
                                    <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                    <li><a class="dropdown-item" href="changePassword.php">Change Password</a></li>
                                <?php } ?>
                                <?php if (isset($_SESSION['admin'])) { ?>
                                    <li><a class="dropdown-item" href="notifications.php">Notifications (<?= $count ?>)</a></li>
                                <?php } ?>
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>

                            </ul>
                        </div>
                    <?php } else { ?>
                        <a href="login.php" class="btn btn-success me-2">Login</a>
                        <a href="register.php" class="btn btn-warning">Sign-up</a>
                    <?php } ?>

                </div>


            </div>
        </div>
    </header>