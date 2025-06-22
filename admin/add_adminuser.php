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
    .login-c {
        height: 450px;
        margin-bottom: 50px;
        color: black;
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

<body style="   background-image: url('../admin/images/drinks\ \(1\).jpg');
      background-size: contain;">
    <?php
    include 'head.php';
    ?>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $con = mysqli_connect("localhost", "root", "", "foodcenter");
        $name = $_POST['username'];
        $password = $_POST['password'];
        $spassword = $_POST['secondpassword'];
        $sql = "insert into `admin_login`(`id`,`admin_id`,`pass1`,`pass2`) values(NULL,'$name','$password','$spassword')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            echo "<script type=\"text/javascript\">
            alert('New admin added successfully...');
        window.location.href='login.php';                     
    </script>";
        } else {
        }
    } else {
        echo "";
    }
    ?>
    <div class=" c1">
        <div class="login-c glass">
            <span class="closebtn" style="position:fixed;top:3%;right:5%;color:black;"
                onclick="this.parentElement.style.display='none';"><a href="login.php"
                    style="color:black;text-decoration:none;font-size:larger;">&times;</a></span>
            <form action="add_adminuser.php" method="POST">
                <h2> <i class="fa-solid fa-power-off"></i> Add new admin</h2>
                <span class="p"> Enter Admin ID</span><br />
                <input type="text" name="username" required><br /><br />
                <span class="p"> Enter Password</span><br />
                <input type="text" name="password" required><br /><br />
                <span class="p">Enter Second Password</span><br />
                <input type="text" name="secondpassword" required><br /><br />

                <button name="submit" type="submit">Add data</button><br /><br />

            </form>
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>
</body>

</html>