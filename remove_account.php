<?php
include 'connect.php';
if (isset($_GET['removeid'])) {
    $id = $_GET['removeid'];

    $sql = "delete from `create_user` where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        session_start();
        session_destroy();
        echo "<script>alert('Account Removed Successfully...');
                window.location.href='login.php'</script>";
    } else {
        die(mysqli_connect_error($result));
    }
}
