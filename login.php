<?php
// session_start();
?>
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
    .c1,
    .c2 {
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

    .con {
        height: 400px;
        width: 90%;
        border-radius: 15px;
        margin: 30px;
        font-size: large;
        padding: 30px;
        color: black;
    }

    .con label {
        font-size: large;
        margin: 10px;
    }

    .con span {
        margin-left: 40px;
        color: white;
        display: block;
        margin: 5px 0px 0px 20px;
    }

    .con a {
        margin-left: 50px;
        color: blue;
        text-decoration: none;
    }
    </style>
</head>

<body style=" background-image: url('../foodcenter/admin/images/burger\ \(3\).jpg');
    background-size: contain;">
    <?php
    include 'head.php';
    ?>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $con = mysqli_connect("localhost", "root", "", "foodcenter");
        $name = $_POST['username'];
        $password = $_POST['password'];
        $sql = "select * from `create_user` where name='$name' AND password='$password'";
        $result = mysqli_query($con, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            while ($row = mysqli_fetch_assoc($result)) {
                session_start();
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['name'];
                $_SESSION['user_mobile'] = $row['mobile'];
                $_SESSION['user_email'] = $row['email'];
    ?>
    <div class="true">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Success.</strong> Login process successfully done...
    </div>
    <?php
                $num = 2;
                echo "<script>alert('Login Successfull...');
                window.location.href='index.php'</script>";
            }
        } else {
            ?>
    <div class="false">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Danger !</strong> Username or Password is incorrect...
    </div>
    <?php
        }
    } else {
        echo "";
    }
    ?>
    <?php
    if (isset($_SESSION['user_id'])) {
    ?>
    <div class="con glass">
        <h3>User Information</h3>
        <a href="update_info.php?updateid=<?php echo $_SESSION['user_id']; ?>"> Update Information </a>
        <a href="change_password.php?updateid=<?php echo $_SESSION['user_id']; ?>">Change Password </a>
        <a href="logout.php">Logout </a>
        <a href="remove_account.php?removeid=<?php echo $_SESSION['user_id']; ?>">Remove Account </a>
        <hr>
        <?php
            include 'connect.php';
            $uid = $_SESSION['user_id'];
            $sql = "select * from `create_user` where `id`=$uid";
            $result = mysqli_query($con, $sql);
            $no = mysqli_num_rows($result);
            if ($no > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
        <label>Name :</label><br>
        <span><?php echo $row['name']; ?></span><br>
        <label>Mobile Number :</label><br>
        <span><?php echo $row['mobile']; ?></span><br>
        <label>Email Address :</label><br>
        <span><?php echo $row['email']; ?></span><br>

        <hr>
        <label>Orders Details :</label><br>
        <p>**********</p><br>
        <?php }
            } ?>
    </div>
    <?php    } else {
    ?>
    <div class="c1">
        <div class="login-c glass">
            <form action="login.php" method="POST">
                <h2><i class="fa-solid fa-power-off"></i> Log In</h2>
                <span class="p">Enter Username</span><br />
                <input type="text" name="username" required><br /><br />
                <span class="p">Enter Password</span><br />
                <input type="password" name="password" required><br /><br />

                <button name="submit" type="submit">Log In</button><br /><br />
                <div class="condition">By continuing, you agree to FoodCenter's Conditions of Use and Privacy Notice.
                </div><br /><br />
                <a href="help.php">Need Help ?</a>
            </form>
        </div><br><br>
    </div>
    <div class="c2">
        <div class="createnew glass">
            <div class="p">New to FoodCenter?</div><br />
            <a href="createnew.php"><button>Create New Account</button></a>
        </div>
    </div>
    <?php } ?>
    <?php
    include 'footer.php';
    ?>
</body>

</html>