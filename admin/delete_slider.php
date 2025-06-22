<?php
include '../connect.php';
if (isset($_GET['sliderdid'])) {
    $id = $_GET['sliderdid'];

    $sql = "delete from `slider` where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<script>alert('Record Deleted Successfully...');
                window.location.href='slider.php'</script>";
    } else {
        die(mysqli_connect_error($result));
    }
}
