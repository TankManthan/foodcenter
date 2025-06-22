<?php
include '../connect.php';
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "delete from `products` where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<script>alert('Record Deleted Successfully...');
                window.location.href='items.php'</script>";
    } else {
        die(mysqli_connect_error($result));
    }
}