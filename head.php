<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            margin: 0px;
            padding: 0px;
        }

        .nav2b .search input:focus {
            background-color: white;
            color: black;
        }
    </style>
</head>

<body>
    <header>
        <div class="nav1">
            <div class="logo-container effect">
                <img src="../foodcenter/images/logo.png" alt="logo"
                    onerror="this.src='../foodcenter/images/loading.gif';"
                    style="height: 35px;width:45px;border-radius:5%;margin-right:10px;border:0px solid white;">
                F O O D
                <pre>  </pre>C E N T E R
            </div>

            <div class="login-container">
                <a href="../foodcenter/admin.php"><button>Admin Login</button></a>
            </div>

        </div>

        <div class="nav2">
            <div class="nav2a">
                <a href="../foodcenter/index.php"><button style="margin: 0px;">Home</button></a>
                <a href="../foodcenter/contact_us.php"><button>Contact Us</button></a>
                <a href="../foodcenter/about.php"><button>About Us</button></a>
                <a href="../foodcenter/help.php"><button>Help</button></a>
                <?php
                session_start();
                if (isset($_SESSION['user_id'])) {
                ?>
                    <a href="#"><button style="background-color:white;color:green">Logged
                            In</button></a>
                    <a href="../foodcenter/login.php"><button><i class="fa-solid fa-user"></i></button></a>
                <?php
                } else {
                ?>
                    <a href="../foodcenter/login.php"><button>Login</button></a>
                <?php } ?>
            </div>
            <div class="nav2b" style="background-color: transparent;">
                <center>
                    <form action="search.php" method="get">
                        <div class="search">
                            <input type="search" placeholder="S e a r c h  F o o d ..." name="query" style="width:200px"
                                required>
                            <a href=" search.php"><button style="width:60px;"><i class="fa-solid fa-magnifying-glass"
                                        style="color: orange;"></i></button></a>
                        </div>
                    </form>
                </center>
                <div class="cart">
                    <!-- <a href="../foodcenter/cart.php"><button><i class="fa-solid fa-cart-shopping"
                                    style="color: orange;"></i></button></a> -->
                    <a href="../foodcenter/cart.php"><button
                            style="width:70px;border-radius:20px;margin-left:10px;height:30px"><i
                                class="fa-solid fa-cart-shopping" style="color: orange;"></i></button></a>
                </div>
            </div>
        </div>
        <div class="review glass">
            <a href="./review.php">Review Our Website</a>
        </div>
</body>

</html>