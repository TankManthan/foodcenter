<?php
include '../connect.php';
if (isset($_GET['conreq_did'])) {
    $id = $_GET['conreq_did'];

    $sql = "delete from `contact_us` where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<script>alert('Record Deleted Successfully...');
                window.location.href='contactinfo.php'</script>";
    } else {
        die(mysqli_connect_error($result));
    }
}
