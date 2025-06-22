<?php
include '../connect.php';
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "delete from `review` where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<script>alert('Review Deleted Successfully...');
                window.location.href='review.php'</script>";
    } else {
        die(mysqli_connect_error($result));
    }
}
