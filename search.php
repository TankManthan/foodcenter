<?php include 'head.php'; ?>
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
    <style>
    body {
        background-image: url("../foodcenter/images/background.jpg");
        background-size: cover;
    }
    </style>
</head>

<body style="background-image: url('admin/images/gujarati\ food\ \(3\).jpg');background-size:contain">
    <?php
    $query = $_GET['query'];
    ?>
    <div class="mostloveddishes">
        <center>
            <div class="heading glass" style="height:90px;">
                <center>
                    <pre> Search Result for  </pre>"<u><?php echo "  " . $query . "  "; ?></u>"
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
                $sql = "select * from `products` where `name` LIKE '%$query%' OR `details` LIKE '%$query%'";
                $result = mysqli_query($con, $sql);
                $no = mysqli_num_rows($result);
                if ($no > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                ?>
                <div class="container1 glass">
                    <div style="height: 200px;width:300px;">
                        <img src="../foodcenter/admin/images/<?php echo $row['image']; ?>" alt=".."
                            onerror="this.src='../foodcenter/images/loading.gif';">
                    </div>
                    <div class="name"><?php echo $row['name']; ?></div>
                    <div style="height: 58px;width:250px;">
                        <div class="details"><?php echo $row['details']; ?></div>
                    </div>
                    <span class="pprice"><?php echo "₹ " . $row['price'] . ".00";     ?></span><br>
                    <div style="display: flex;justify-content:space-between;align-items:center;">
                        <?php
                                if (isset($_SESSION['user_id'])) {
                                ?>
                        <a href="checkout1.php?id=<?php echo $row['id']; ?>"><button
                                style="width:200px;border-radius: 15px 0px 0px 15px;margin-left:15px;">Order
                                Now <i class="fa-solid fa-truck"></i>
                            </button></a>
                        <a href="cart.php?id=<?php echo $row['id']; ?>"><button style="margin-right: 15px;">
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
                } else {
                    ?>
                <h4 style="color: black;text-align:left;font-size:x-large;background-color:white">No Result Found !</h4>
                <?php
                } ?>

            </div>
        </center>
    </div>
</body>

</html>
<?php include 'footer.php'; ?>