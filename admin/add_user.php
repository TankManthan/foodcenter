<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../admin/styles/createnew.css">
    <link rel="stylesheet" href="../admin/styles/homepage.css">
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
    </style>
</head>

<body style="   background-image: url('../admin/images/drinks\ \(5\).jpg');
      background-size: contain;">
    <?php
    include 'head.php';
    ?>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // $con = mysqli_connect("localhost", "root", "", "foodcenter");
        include "../connect.php";
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        if ((preg_match('/^[a-zA-Z ]*$/', $name))) {
            if (preg_match('/^[0-9]{10}+$/', $mobile)) {
                if ($password == $password2) {
                    $insert = "INSERT INTO `create_user` (`id`, `name`, `mobile`, `email`, `password`) VALUES (NULL, '$name', '$mobile', '$email', '$password');";
                    if (mysqli_query($con, $insert)) {
                        echo "<script>alert('Account Created Successfully...');
                        window.location.href='login.php'</script>";
                    } else {
    ?>
    <div class=" false">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Danger !</strong> Error occured...
    </div>
    <?php                    }
                } else {
                    ?>
    <div class="warning">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Warning !</strong> Passwords are not matched...
    </div>
    <?php                  }
            } else {
                ?>
    <div class="warning">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Warning !</strong> Mobile number is invalid...
    </div>
    <?php             }
        } else {
            ?>
    <div class="warning">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Warning !</strong> Name must contain only charcter...

    </div>
    <?php         }
    }
    ?>
    <div class="c1">
        <div class="login-co glass">
            <span class="closebtn" style="position:fixed;top:3%;right:5%;color:black;"
                onclick="this.parentElement.style.display='none';"><a href="login.php"
                    style="color:black;text-decoration:none;font-size:larger;">&times;</a></span>
            <form action="add_user.php" method="POST">
                <h2><i class="fa-solid fa-circle-plus"></i> Create Account</h2>
                <span class="p">Your Name</span><br />
                <input type="text" name="name" required><br /><br />
                <span class="p">Enter Mobile Number</span><br />
                <input type="text" name="mobile" required><br /><br />
                <span class="p">Enter Email</span><br />
                <input type="email" name="email" required><br /><br />
                <span class="p">Enter Password</span><br />
                <input type="password" name="password" required><br /><br />
                <span class="p">Re-Enter Password</span><br />
                <input type="password" name="password2" required><br /><br />
                <button name="submit" type="submit">Add</button><br /><br />
            </form>
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>
</body>

</html>