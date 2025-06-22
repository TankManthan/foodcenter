<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles//contact_us.css">
    <link rel="stylesheet" href="../styles/homepage.css">
    <link rel="stylesheet" href="../admin/styles/createnew.css">
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
    </style>

</head>

<body style="   background-image: url('../admin/images/drinks\ \(6\).jpg');
      background-size: contain;">
    <?php include 'head.php'; ?>
    <?php
    if (isset($_GET['update2'])) {
        include '../connect.php';
        $id = $_GET['id'];
        $name = $_GET['name'];
        $mobile = $_GET['mobile'];
        $email = $_GET['email'];
        $password = $_GET['password'];
        $password2 = $_GET['password2'];
        if ((preg_match('/^[a-zA-Z ]*$/', $name))) {
            if (preg_match('/^[0-9]{10}+$/', $mobile)) {
                if ($password == $password2) {
                    $update = "UPDATE `create_user` SET `name` = '$name', `mobile` = $mobile,`email`='$email',`password`='$password' WHERE `create_user`.`id` = $id;";
                    $result = mysqli_query($con, $update);
                    if ($result) {
                        echo "<script>alert('Record Updated Successfully...');
                             window.location.href='login.php'</script>";
                    }
                } else {
    ?>
                    <div class=" warning">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        <strong>Warning !</strong> Passwords are not matched...
                    </div>
                    <form action="update_user.php" method="get">
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
                                include '../connect.php';
                                $sql = "select * from `create_user` where id=$id";
                                $result = mysqli_query($con, $sql);
                                $num = mysqli_num_rows($result);
                                if ($num > 0) {
                                    while ($ram = mysqli_fetch_assoc($result)) {
                                ?>
                                        <span class="p">Your Name</span><br />
                                        <input type="text" name="name" value="<?php echo $ram['name']; ?>" required><br /><br />
                                        <span class="p">Enter Mobile Number</span><br />
                                        <input type="number" name="mobile" value="<?php echo $ram['mobile']; ?>" required><br /><br />
                                        <span class="p">Enter Email</span><br />
                                        <input type="email" name="email" value="<?php echo $ram['email']; ?>" required><br /><br />
                                        <span class="p">Enter Password</span><br />
                                        <input type="password" name="password" value="<?php echo $ram['password']; ?>" required><br /><br />
                                        <span class="p">Re-Enter Password</span><br />
                                        <input type="password" name="password2" value="<?php echo $ram['password']; ?>" required><br /><br />
                                <?php }
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
                    <strong>Warning !</strong> Mobile number is invalid...
                </div>
                <form action="update_user.php" method="get">
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
                            include '../connect.php';
                            $sql = "select * from `create_user` where id=$id";
                            $result = mysqli_query($con, $sql);
                            $num = mysqli_num_rows($result);
                            if ($num > 0) {
                                while ($ram = mysqli_fetch_assoc($result)) {
                            ?>
                                    <span class="p">Your Name</span><br />
                                    <input type="text" name="name" value="<?php echo $ram['name']; ?>" required><br /><br />
                                    <span class="p">Enter Mobile Number</span><br />
                                    <input type="number" name="mobile" value="<?php echo $ram['mobile']; ?>" required><br /><br />
                                    <span class="p">Enter Email</span><br />
                                    <input type="email" name="email" value="<?php echo $ram['email']; ?>" required><br /><br />
                                    <span class="p">Enter Password</span><br />
                                    <input type="password" name="password" value="<?php echo $ram['password']; ?>" required><br /><br />
                                    <span class="p">Re-Enter Password</span><br />
                                    <input type="password" name="password2" value="<?php echo $ram['password']; ?>" required><br /><br />
                            <?php }
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
                <strong>Warning !</strong> Name must contain only charcter...
            </div>
            <form action="update_user.php" method="get">
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
                        include '../connect.php';
                        $sql = "select * from `create_user` where id=$id";
                        $result = mysqli_query($con, $sql);
                        $num = mysqli_num_rows($result);
                        if ($num > 0) {
                            while ($ram = mysqli_fetch_assoc($result)) {
                        ?>
                                <span class="p">Your Name</span><br />
                                <input type="text" name="name" value="<?php echo $ram['name']; ?>" required><br /><br />
                                <span class="p">Enter Mobile Number</span><br />
                                <input type="number" name="mobile" value="<?php echo $ram['mobile']; ?>" required><br /><br />
                                <span class="p">Enter Email</span><br />
                                <input type="email" name="email" value="<?php echo $ram['email']; ?>" required><br /><br />
                                <span class="p">Enter Password</span><br />
                                <input type="password" name="password" value="<?php echo $ram['password']; ?>" required><br /><br />
                                <span class="p">Re-Enter Password</span><br />
                                <input type="password" name="password2" value="<?php echo $ram['password']; ?>" required><br /><br />
                        <?php }
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
    <form action="update_user.php" method="get">
        <?php
        if (isset($_GET['updateid'])) {
            $id = $_GET['updateid'];
        ?>
            <form action="update_user.php" method="get">
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
                        include '../connect.php';
                        $sql = "select * from `create_user` where id=$id";
                        $result = mysqli_query($con, $sql);
                        $num = mysqli_num_rows($result);
                        if ($num > 0) {
                            while ($ram = mysqli_fetch_assoc($result)) {
                        ?>
                                <span class="p">Your Name</span><br />
                                <input type="text" name="name" value="<?php echo $ram['name']; ?>" required><br /><br />
                                <span class="p">Enter Mobile Number</span><br />
                                <input type="number" name="mobile" value="<?php echo $ram['mobile']; ?>" required><br /><br />
                                <span class="p">Enter Email</span><br />
                                <input type="email" name="email" value="<?php echo $ram['email']; ?>" required><br /><br />
                                <span class="p">Enter Password</span><br />
                                <input type="password" name="password" value="<?php echo $ram['password']; ?>" required><br /><br />
                                <span class="p">Re-Enter Password</span><br />
                                <input type="password" name="password2" value="<?php echo $ram['password']; ?>"
                                    required><br /><br />
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