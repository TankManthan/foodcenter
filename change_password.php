<?php session_unset(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../foodcenter/styles/contact_us.css">
    <link rel="stylesheet" href="../foodcenter/styles/homepage.css">
    <link rel="stylesheet" href="../foodcenter/styles/createnew.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    .true {
        padding: 15px;
        background-color: #04AA6D;
        color: white;
    }

    .false {
        padding: 15px;
        background-color: #f44336;
        color: white;
    }

    .warning {
        padding: 15px;
        background-color: #FFC300;
        color: white;
    }

    .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
    }

    .closebtn:hover {
        color: black;
    }

    .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
    }

    .closebtn:hover {
        color: black;
    }

    .a {
        width: 100%;
        display: flex;
        /* align-items: center; */
        justify-content: center;
    }

    .btn {
        height: 35px;
        width: 150px;
        font-family: font2;
        background-color: orange;
        color: black;
        border: none;
        border-radius: 10px;
    }

    .btn:hover {
        transition: 0.3s;
        color: orange;
        background-color: white;
    }

    .login-co {
        height: 500px;
    }

    .c1 {
        height: 500px;
    }
    </style>

</head>

<body>
    <?php include 'head.php'; ?>
    <?php
    if (isset($_GET['update2'])) {
        include 'connect.php';
        $id = $_GET['id'];
        $sql = "select * from `create_user` where id=$id";
        $result = mysqli_query($con, $sql);
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            while ($ram = mysqli_fetch_assoc($result)) {
                $pass = $ram['password'];
            }
        }
        $password = $_GET['password'];
        $npassword = $_GET['npassword'];
        $npassword2 = $_GET['npassword2'];
        if ($pass == $password) {
            if ($npassword == $npassword2) {
                $update = "UPDATE `create_user` SET `password` = '$npassword' WHERE `create_user`.`id` = $id;";
                $result = mysqli_query($con, $update);
                if ($result) {
                    echo "<script>alert('Password Changed Successfully...');
                             window.location.href='login.php'</script>";
                }
            } else {
    ?>
    <div class="warning">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Warning !</strong> New Passwords are not matched...
    </div>
    <form action="change_password.php" method="get">
        <input hidden type="number" name="id" value="<?php echo $id; ?>" style="display:none;">
        <div class="c1">
            <div class="login-co glass">
                <center>
                    <h1><i class="fa-regular fa-address-card"></i> Update information</h1>
                </center>
                <span class="closebtn" style="position:fixed;top:4%;right:5%;color:black;"
                    onclick="this.parentElement.style.display='none';"><a href="login.php"
                        style="color:black;text-decoration:none;font-size:larger;">&times;</a></span>
                <?php
                            include 'connect.php';
                            $sql = "select * from `create_user` where id=$id";
                            $result = mysqli_query($con, $sql);
                            $num = mysqli_num_rows($result);
                            if ($num > 0) {
                                while ($ram = mysqli_fetch_assoc($result)) {
                            ?>
                <span class="p">Enter Your Password</span><br />
                <input type="password" name="password" required><br /><br />
                <span class="p">Enter New Password</span><br />
                <input type="password" name="npassword" required><br /><br />
                <span class="p">Re-Enter New Password</span><br />
                <input type="password" name="npassword2" required><br /><br /> <?php }
                                                                                            } ?>
                <center>
                    <input type="submit" value="Update" name="update2" class="btn">
                    <!-- <button type="submit" class="button">Update request</button> -->
                </center>
            </div>
        </div>
    </form>
    <?php
            }
        } else {
            ?>
    <div class="warning">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Warning !</strong> WRONG PASSWORD...
    </div>
    <form action="change_password.php" method="get">
        <input hidden type="number" name="id" value="<?php echo $id; ?>" style="display:none;">
        <div class="c1">
            <div class="login-co glass">
                <center>
                    <h1><i class="fa-regular fa-address-card"></i> Update information</h1>
                </center>
                <span class="closebtn" style="position:fixed;top:4%;right:5%;color:black;"
                    onclick="this.parentElement.style.display='none';"><a href="login.php"
                        style="color:black;text-decoration:none;font-size:larger;">&times;</a></span>
                <?php
                        include 'connect.php';
                        $sql = "select * from `create_user` where id=$id";
                        $result = mysqli_query($con, $sql);
                        $num = mysqli_num_rows($result);
                        if ($num > 0) {
                            while ($ram = mysqli_fetch_assoc($result)) {
                        ?>
                <span class="p">Enter Your Password</span><br />
                <input type="password" name="password" required><br /><br />
                <span class="p">Enter New Password</span><br />
                <input type="password" name="npassword" required><br /><br />
                <span class="p">Re-Enter New Password</span><br />
                <input type="password" name="npassword2" required><br /><br /> <?php }
                                                                                        } ?>
                <center>
                    <input type="submit" value="Update" name="update2" class="btn">
                    <!-- <button type="submit" class="button">Update request</button> -->
                </center>
            </div>
        </div>
    </form>
    <?php
        }
    }
    ?>
    <form action="change_password.php" method="get">
        <?php
        if (isset($_GET['updateid'])) {
            $id = $_GET['updateid'];
        ?>
        <form action="change_password.php" method="get">
            <input hidden type="number" name="id" value="<?php echo $id; ?>" style="display:none;">
            <div class="c1">
                <div class="login-co glass">
                    <center>
                        <h1><i class="fa-regular fa-address-card"></i> Update information</h1>
                    </center>
                    <span class="closebtn" style="position:fixed;top:4%;right:5%;color:black;"
                        onclick="this.parentElement.style.display='none';"><a href="login.php"
                            style="color:black;text-decoration:none;font-size:larger;">&times;</a></span>
                    <?php
                        include 'connect.php';
                        $sql = "select * from `create_user` where id=$id";
                        $result = mysqli_query($con, $sql);
                        $num = mysqli_num_rows($result);
                        if ($num > 0) {
                            while ($ram = mysqli_fetch_assoc($result)) {
                        ?>
                    <span class="p">Enter Your Password</span><br />
                    <input type="password" name="password" required><br /><br />
                    <span class="p">Enter New Password</span><br />
                    <input type="password" name="npassword" required><br /><br />
                    <span class="p">Re-Enter New Password</span><br />
                    <input type="password" name="npassword2" required><br /><br />
                    <?php }
                        } ?>
                    <center>
                        <input type="submit" value="Update" name="update2" class="btn">
                        <!-- <button type="submit" class="button">Update request</button> -->
                    </center>
                </div>
            </div>
        </form>
        <?php } ?>

    </form>
    <?php include 'footer.php'; ?>
</body>

</html>