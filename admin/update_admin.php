<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../admin/styles/login.css">
    <link rel="stylesheet" href="../admin/styles/homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
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

        .c {
            z-index: 1;
            height: 250px;
            width: 600px;
            background-color: gainsboro;
            position: fixed;
            top: 10%;
            left: 30%;
            /* padding-top: 100px; */
            border: 1px solid black;
            border-radius: 15px;
            color: black;
            font-family: font2;
        }

        .c button {
            height: 30px;
            width: 150px;
            font-family: font2;
            background-color: orange;
            color: black;
            border: none;
            border-radius: 10px;
        }

        .c input {
            height: 30px;
            width: 300px;
            margin-left: 50px;
        }

        .c label {
            font-size: larger;
            margin-left: 50px;
        }

        .c textarea {
            margin-left: 50px;
            width: 490px;
            height: 50px;
        }
    </style>

</head>

<body style="   background-image: url('../admin/images/drinks\ \(4\).jpg');
      background-size: contain;">
    <?php include 'head.php'; ?>
    <form action=" update_admin.php" method="get">
        <?php
        if (isset($_GET['updateid'])) {
            $id = $_GET['updateid'];
        ?>
            <form action="update_admin.php" method="get">
                <input hidden type="number" name="id" value="<?php echo $id; ?>" style="display:none;">
                <div class="c1">
                    <div class="login-c glass" style="color:black">
                        <span class="closebtn" style="position:fixed;top:3%;right:5%;color:black;"
                            onclick="this.parentElement.style.display='none';"><a href="login.php"
                                style="color:black;text-decoration:none;font-size:larger;">&times;</a></span>
                        <h2> <i class="fa-solid fa-power-off"></i> Update information</h2>
                        <?php
                        include '../connect.php';
                        $sql = "select * from `admin_login` where id=$id";
                        $result = mysqli_query($con, $sql);
                        $num = mysqli_num_rows($result);
                        if ($num > 0) {
                            while ($ram = mysqli_fetch_assoc($result)) {
                        ?>
                                <span class="p"> Enter Admin ID</span><br />
                                <input type="text" name="username" value="<?php echo $ram['admin_id']; ?>" required><br /><br />
                                <span class="p"> Enter Password</span><br />
                                <input type="text" name="password" value="<?php echo $ram['pass1']; ?>" required><br /><br />
                                <span class="p">Enter Second Password</span><br />
                                <input type="text" name="secondpassword" value="<?php echo $ram['pass2']; ?>" required><br /><br />
                        <?php }
                        } ?>
                        <button name="update2" type="submit">Update data</button><br /><br />

                    </div>
                </div>
                <br><br><br>
            </form>
        <?php
        } ?>
        <?php
        if (isset($_GET['update2'])) {
            include '../connect.php';
            $id = $_GET['id'];
            $name = $_GET['username'];
            $pass = $_GET['password'];
            $spass = $_GET['secondpassword'];
            $update = "UPDATE `admin_login` SET `admin_id`='$name', `pass1`='$pass',`pass2`='$spass' WHERE `admin_login`.`id` = $id;";
            $result = mysqli_query($con, $update);
            if ($result) {
                echo "<script>alert('Record Updated Successfully...');
                window.location.href='login.php'</script>";
            } else {
                echo "<p style='color:red;'>Error...<br></p>";
            }
        } else {
        }

        ?>
    </form>
    <?php include 'footer.php'; ?>
</body>

</html>