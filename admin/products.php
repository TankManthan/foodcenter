<?php include 'head.php'; ?>
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
        background-image: url("../admin/images/background.jpg");
        background-size: cover;
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
    $name = $_GET['cat_id'];
    ?>
    <div class="mostloveddishes">
        <center>
            <div class="heading glass">
                <center>
                    Result Category :<u><?php echo $name; ?></u>
                </center>
            </div>
        </center>
        <div class="minato"><a href="items.php"><b><i class="fa-solid fa-sun"></i> Click to
                    modify details</b></a>
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
                    </button></a>
            </div> -->
                <?php
                include '../connect.php';
                $sql = "select * from `products` where `category`='$name'";
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
                    <span class="pprice"><?php echo "₹ " . $row['price'] . ".00";     ?></span><br>
                    <div style="display: flex;justify-content:space-between;align-items:center;">

                        <a href="checkout1.php?id=<?php echo $row['id']; ?>"><button
                                style=" width:270px;border-radius: 15px;margin-left:15px;">See Item <i
                                    class="fa-solid fa-eye" style="font-size: large;"></i>
                            </button></a>
                    </div>
                </div>
                <?php   }
                }  ?>

            </div>
        </center>
    </div>
</body>

</html>
<?php include 'footer.php'; ?>