<?php include 'inc/header.php';

$query = "SELECT * FROM notifications WHERE status = 'unseen'";
$notifications = null;
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $notifications[] = $row;
}

?>

<div class="container">
    <h1>Notification's</h1>
    <div class="list-group list-group-checkable">
        <?php if (!is_null($notifications)) {
            foreach ($notifications as $notification) { ?>
                <label class="list-group-item py-3" for="listGroupCheckableRadios1">
                    <span class="d-block small opacity-50"><?= $notification['message'] ?></span>
                    <p class="text-end">
                        <a href="process/notification/changeStatus.php?id=<?= $notification['id'] ?>" class="btn btn-sm btn-primary">Seen</a>
                    </p>
                </label>
            <?php } ?>
        <?php } else { ?>
            <label class="list-group-item py-3" for="listGroupCheckableRadios1">
                <span class="d-block small opacity-50">
                    Empty Notification's
                </span>
            </label>
        <?php } ?>
    </div>
</div>


<?php include 'inc/footer.php'; ?>