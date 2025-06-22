<?php session_start();    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../foodcenter/styles/login.css">
    <link rel="stylesheet" href="../foodcenter/styles/homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .login-c {
            height: 450px;
            margin-bottom: 50px;
            color: black;
        }

        .c1 {
            margin: 0px;
        }

        body {
            background-image: url("../foodcenter/admin/images/slide3.jpg");
            background-size: cover;
        }

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
    </style>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $con = mysqli_connect("localhost", "root", "", "foodcenter");
        $name = $_POST['username'];
        $password = $_POST['password'];
        $spassword = $_POST['secondpassword'];
        $sql = "select * from `admin_login` where admin_id='$name' AND pass1='$password' AND pass2='$spassword'";
        $result = mysqli_query($con, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
    ?>
            <div class="true">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <strong>Success.</strong> Login process successfully done...
            </div>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                $_SESSION['admin_id'] = $row['id'];
            }
            echo "<script type=\"text/javascript\">
                window.location.href='admin/index.php';                     
            </script>";
            $num = 2;
        } else {
            ?>
            <div class="false">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <strong>Danger !</strong> AdminID or Passwords are incorrect...
            </div>
    <?php
        }
    } else {
        echo "";
    }
    ?>
    <img src="../foodcenter/images/logo.png" style="height:50px;width:70px;margin:20px;border-radius:15px;">
    <div class="c1">
        <div class="login-c glass">
            <form action="admin.php" method="POST">
                <span class="closebtn" style="position:fixed;top:4%;right:5%;color:black;"
                    onclick="this.parentElement.style.display='none';"><a href="index.php"
                        style="color:black;text-decoration:none;font-size:larger;">&times;</a></span>
                <h2> <i class="fa-solid fa-power-off"></i> Admin Login</h2>
                <span class="p">Admin ID</span><br />
                <input type="text" name="username" required><br /><br />
                <span class="p">Password</span><br />
                <input type="password" name="password" required><br /><br />
                <span class="p">Second Password</span><br />
                <input type="password" name="secondpassword" required><br /><br />

                <button name="submit" type="submit">Log In</button><br /><br />

            </form>
        </div>
    </div>
</body>

</html>