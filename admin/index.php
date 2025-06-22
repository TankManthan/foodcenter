<?php
if (!isset($_SESSION['admin_id'])) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../foodcenter/admin/styles/homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    body {
        background-image: url("../foodcenter/images/add.gif");
        background-size: contain;
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

    .minato {
        padding-left: 15px;
        height: 25px;
        width: 230px;
        background-color: #717171;
        text-align: center;
        border-radius: 0px 10px 10px 0px;
    }

    .minato a {
        text-decoration: none;
        color: white;
    }

    .minato:hover {
        background-color: black;
        color: white;
        cursor: pointer;
    }
    </style>
</head>

<body>
    <?php
        include "head.php";
        ?>
    </header>
    <?php
        include "slider2.php";
        ?>
    <hr>
    <div class="mostloveddishes">
        <center>
            <div class="heading glass">
                <center>
                    Most Loved Dishes
                </center>
            </div>
        </center>
        <div class="minato"><a href="famousdishes.php"><b><i class="fa-solid fa-sun"></i> Click to
                    modify details</b></a>
        </div>
        <br>
        <?php
            include '../connect.php';
            $sql = "select * from `famous_dishes`";
            $result = mysqli_query($con, $sql);
            $no = mysqli_num_rows($result);
            ?>
        <div class="minato" style="text-align: left;"><a href="famousdishes.php"><b><i class="fa-solid fa-sun"></i>
                    Total Items
                    :<?php echo $no; ?></b></a>
        </div>
        <center>
            <div class="con">
                <!-- <div class="container1 glass">
                <img src="../images/slide1.jpg">
                <div class="name">Dabeli</div>
                <div class="details">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi perspiciatis
                </div>
                <span class="pprice">₹5000</span>
                <a href="#"><button> <i class="fa-solid fa-cart-shopping"></i>
                    </button></a> -->
                <?php
                    include '../connect.php';
                    $sql = "select * from `famous_dishes`";
                    $result = mysqli_query($con, $sql);
                    $no = mysqli_num_rows($result);
                    if ($no > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                    ?>
                <div class="container1 glass">
                    <div style="height: 200px;width:300px;">
                        <img src="../admin/images/<?php echo $row['image']; ?>" alt=".."
                            onerror="this.src='../foodcenter/images/loading.gif';">
                    </div>
                    <div class="name"><?php echo $row['name']; ?></div>
                    <div style="height: 58px;width:250px;">
                        <div class="details"><?php echo $row['details']; ?></div>
                    </div>
                    <span class="pprice"><?php echo "₹" . $row['price'] . ".00";     ?></span><br>
                    <center>
                        <div style="display: flex;justify-content:space-between;align-items:center;">
                            <a href="checkout1.php?famous_id=<?php echo $id; ?>"><button
                                    style="width:270px;border-radius: 15px;margin-left:15px;">See Item <i
                                        class="fa-solid fa-eye" style="font-size: large;"></i>
                                </button></a>
                        </div>
                    </center>
                </div>
                <?php   }
                    }  ?>

            </div>
        </center>
    </div>
    <hr>
    <div class="categories">
        <center>
            <div class="heading glass">
                <center>
                    Food Categories
                </center>
            </div>
        </center>
        <div class="minato"><a href="categories.php"><b><i class="fa-solid fa-sun"></i> Click to
                    modify details</b></a>
        </div>
        <br>
        <?php
            include '../connect.php';
            $sql = "select * from `categories`";
            $result = mysqli_query($con, $sql);
            $no = mysqli_num_rows($result);
            ?>
        <div class="minato" style="text-align: left;"><b><i class="fa-solid fa-sun"></i> Total Categories
                :<?php echo $no; ?></b>
        </div><br>
        <?php
            include '../connect.php';
            $sql = "select * from `products`";
            $result = mysqli_query($con, $sql);
            $no = mysqli_num_rows($result);
            ?>
        <div class="minato" style="text-align: left;"><b><i class="fa-solid fa-sun"></i> Total Items
                :<?php echo $no; ?></b>
        </div>
        <div class="shop-section">
            <?php
                include '../connect.php';
                $sql = "select * from `categories`";
                $result = mysqli_query($con, $sql);
                $no = mysqli_num_rows($result);
                if ($no > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                ?>
            <div class="box1 box glass">
                <?php
                            include '../connect.php';
                            $s = "select * from `products` where `category`='$name'";
                            $r = mysqli_query($con, $s);
                            $n = mysqli_num_rows($r);
                            ?>
                <h2><?php echo $row['name'] . " (" . $n . ")"; ?></h2>
                <div class="box1-image">
                    <img src="../admin/images/<?php echo $row['image']; ?>" alt=""
                        onerror="this.src='../foodcenter/images/loading.gif';">
                </div>
                <center>
                    <a href="products.php?cat_id=<?php echo $name; ?>">See Items <i
                            class="fa-solid fa-angles-right"></i></a>
                </center>
            </div>
            <?php }
                } ?>
        </div>
    </div>
    <hr>
    <div class="chefs ">
        <center>
            <div class="heading glass">
                OUR COOKS
            </div>
        </center>
        <div class="minato"><a href="chef.php"><b><i class="fa-solid fa-sun"></i> Click to
                    modify details</b></a>
        </div><br>
        <?php
            include '../connect.php';
            $sql = "select * from `chefs_deatils`";
            $result = mysqli_query($con, $sql);
            $no = mysqli_num_rows($result);
            ?>
        <div class="minato" style="text-align: left;"><a href="famousdishes.php"><b><i class="fa-solid fa-sun"></i>
                    Total Chefs
                    :<?php echo $no; ?></b></a>
        </div>
        <div class="chef-c">
            <!-- <div class="c1 glass">
                <div class="c2"><img src="../images/img3.jpg" alt=""></div>
                <div class="c3">
                    <div class="name">
                        #1. Sanjeev Kumar
                    </div><br>
                    <hr>
                    <div class="details">
                        Awards and Honors<br><br>
                        He is honored with the padma shri award in 2017<br>
                        He was also honored with the national award for the 'best chef of india' given by gol.
                    </div>
                </div>
            </div> -->
            <?php
                include '../connect.php';
                $sql = "select * from `chefs_deatils`";
                $result = mysqli_query($con, $sql);
                $no = mysqli_num_rows($result);
                if ($no > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                ?>
            <div class="c1 glass">
                <div class="c2"><img src="../admin/images/<?php echo $row['image']; ?>" alt=""
                        onerror="this.src='../foodcenter/images/loading.gif';"
                        style="  clip-path: circle(93% at right);"></div>
                <div class="c3">
                    <div class="name">
                        <?php echo "#" . $row['id'] . "." ?> <?php echo $row['name'] ?>
                    </div><br>
                    <hr>
                    <div class="details">
                        Awards and Honors<br><br>
                        <?php echo $row['desc1']; ?><br>
                        <?php echo $row['desc2']; ?>
                    </div>
                </div>
            </div>
            <?php   }
                }  ?>
        </div>
    </div>
    <br>
    <?php
        include "footer.php";
        ?>
</body>

</html>
<?php } else {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/login.css">
    <link rel="stylesheet" href="../styles/homepage.css">
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
        background-image: url("../images/slide3.jpg");
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
        window.location.href=../admin/index.php';                     
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
    <img src="../images/logo.png" style="height:50px;width:70px;margin:20px;border-radius:15px;">
    <div class="c1">
        <div class="login-c glass">
            <form action="../admin.php" method="POST">

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
<?php
} ?>