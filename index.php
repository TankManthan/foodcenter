<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../foodcenter/styles/homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body style="background-image: url('../foodcenter/admin/images/background.jpg');background-size:contain">
    <?php
    include "head.php";
    ?>
    </header>
    <?php
    include "slider.php";
    ?>
    <hr>
    <div class="mostloveddishes">
        <center>
            <div class="heading glass">
                <center>
                    Most Loved Dishes
                </center>
            </div>
            <div class="con">
                <!-- <div class="container1 glass">
                <img src="../images/slide1.jpg">
                <div class="name">Dabeli</div>
                <div class="details">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi perspiciatis
                </div>
                <span class="pprice">₹5000</span>
                <a href="#"><button> <i class="fa-solid fa-cart-shopping"></i>
                    </button></a>
            </div> -->

                <?php
                include 'connect.php';
                $sql = "select * from `famous_dishes`";
                $result = mysqli_query($con, $sql);
                $no = mysqli_num_rows($result);
                if ($no > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                ?>
                        <div class="container1">
                            <div style="height: 200px;width:300px;">
                                <img src="../foodcenter/admin/images/<?php echo $row['image']; ?>" alt=".."
                                    onerror="this.src='../foodcenter/images/loading.gif';">
                            </div>
                            <div class="name"><?php echo $row['name']; ?></div>
                            <div style="height: 58px;width:250px;">
                                <div class="details"><?php echo $row['details']; ?></div>
                            </div>
                            <span class="pprice"><?php echo "₹" . $row['price'] . ".00";     ?></span><br>
                            <div style="display: flex;justify-content:space-between;align-items:center;">
                                <?php
                                if (isset($_SESSION['user_id'])) {
                                ?>
                                    <a href="checkout1.php?id=<?php echo $row['id']; ?>"><button
                                            style="width:200px;border-radius: 15px 0px 0px 15px;margin-left:15px;">Order
                                            Now <i class="fa-solid fa-truck"></i>
                                        </button></a>
                                    <a href="cart.php?addtocart=true&product_id=<?php echo $row['id']; ?>"><button
                                            style="margin-right: 15px;">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button></a>
                                <?php
                                } else {
                                ?>
                                    <a href="login.php"><button
                                            style="width:200px;border-radius: 15px 0px 0px 15px;margin-left:15px;">Order
                                            Now <i class="fa-solid fa-truck"></i>
                                        </button></a>
                                    <a href="login.php"><button style="margin-right: 15px;">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button></a>
                                <?php } ?>
                            </div>
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
        <div class="shop-section">
            <a href="products.php?cat_id=<?php echo $name; ?>">
                <?php
                include 'connect.php';
                $sql = "select * from `categories`";
                $result = mysqli_query($con, $sql);
                $no = mysqli_num_rows($result);
                if ($no > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                ?>

                        <div class="box1 box glass">
                            <h2><?php echo $row['name']; ?></h2>
                            <div class="box1-image">
                                <img src="../foodcenter/admin/images/<?php echo $row['image']; ?>" alt=""
                                    onerror="this.src='../foodcenter/images/loading.gif';">
                            </div>
                            <center>
                                See More <i class="fa-solid fa-angles-right"></i>
            </a>
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
            include 'connect.php';
            $sql = "select * from `chefs_deatils`";
            $result = mysqli_query($con, $sql);
            $no = mysqli_num_rows($result);
            $srno = 0;
            if ($no > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $srno++;
            ?>
                    <div class="c1 glass">
                        <div class="c2"><img src="../foodcenter/admin/images/<?php echo $row['image']; ?>" alt="Not found"
                                onerror="this.src='../foodcenter/images/loading.gif';"
                                style="  clip-path: circle(93% at right);"></div>
                        <div class="c3">
                            <div class="name">
                                <?php echo "#" . $srno . "." ?> <?php echo $row['name'] ?>
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
    <?php
    include "footer.php";
    ?>
</body>

</html>