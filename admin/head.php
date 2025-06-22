<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../admin/styles/homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    body {
        margin: 0px;
        padding: 0px;
    }

    .n {
        font-size: larger;
    }

    .blink {
        animation: blinker 1.5s linear infinite;
        color: white;
        font-family: sans-serif;
    }

    @keyframes blinker {
        50% {
            opacity: 0;
        }
    }
    </style>
</head>

<body>
    <header>
        <div class="n"
            style="background-color:#000000;color:white;font-size:large;background-image:url('../admin/images/background.jpg')">
            <center>
                <div style="width:40%;background-color:transparent;" class="glass">
                    <marquee class="blink"><i>Welcome! This is administrator side...</i>
                    </marquee>
                </div>
            </center>
        </div>
        <div class="nav1">
            <div class="logo-container effect">
                <img src="../images/logo.png" alt="logo" onerror="this.src='../foodcenter/images/loading.gif';"
                    style="height: 35px;width:45px;border-radius:5%;margin-right:10px;border:0px solid white;">
                F O O D
                <pre>  </pre>C E N T E R
            </div>

            <div class="login-container">
                <form action="index.php" method="POST">
                    <a href="../index.php"><button name="adminlogout">Admin Logout</button></a>
            </div>
            <?php
            if (isset($_POST['adminlogout'])) {
            ?>
            <div class="adminc glass" style="z-index: 1;height:200px;width:600px;background-color:gainsboro;
                    position:fixed;top:10%;left:30%;padding-top:100px;border:1px solid black;border-radius:15px;">
                <center>
                    <h4 style="color:black">Are you really want to logout ?</h4>
                    <div>
                        <button name="yes"
                            style="height: 30px;width:80px;color:black;background-color:white;border:none;font-size:larger;color:green;border-radius:10px 0px 0px 10px;"><i
                                class="fa-solid fa-check"></i></button>
                        <button name="no"
                            style="height: 30px;width:80px;color:black;background-color:white;border:none;font-size:larger;color:red;border-radius:0px 10px 10px 0px;"><i
                                class="fa-solid fa-xmark"></i></button>
                    </div>
                </center>
            </div>
            <?php
            }
            if (isset($_POST['yes'])) {
                session_destroy();
                echo '
                <script>
                window.location.href = "../admin.php"; 
                </script>';
            } else {
            }
            ?>
            </form>

        </div>

        <div class="nav2">
            <div class="nav2a">
                <a href="../admin/index.php"><button style="margin: 0px;">Home</button></a>
                <a href="../admin/contactinfo.php"><button>Contact Requests</button></a>
                <a href="../admin/login.php"><button>Login Details</button></a>
                <a href="../admin/help.php"><button>Help & FAQ</button></a>
                <a href="../admin/items.php"><button>Items</button></a>
            </div>
            <!-- <div class="nav2b">
                <div class="search">
                    <input type="search" placeholder="S e a r c h  F o o d ...">
                    <a href="../foodcenter/search.php"><button><i class="fa-solid fa-magnifying-glass"
                                style="color: orange;"></i></button></a>
                </div>
                <div class="cart">
                    <a href="../foodcenter/cart.php"><button><i class="fa-solid fa-cart-shopping"
                                style="color: orange;"></i></button></a>
                </div>
            </div> -->
        </div>
        <div class="review glass" style="font-size: 16px;">
            <a href="./review.php">See Reviews</a>
        </div>
</body>

</html>