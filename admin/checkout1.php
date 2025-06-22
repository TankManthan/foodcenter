<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../admin/styles/contact_us.css">
    <link rel="stylesheet" href="../admin/styles/homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    body {
        background-image: url("../admin/images/img3.jpg");

    }

    .rin {
        height: 780px;
        width: 70%;
        background-color: #232523;
        border-radius: 20px;
        margin: 20px 0px 20px 0px;
    }

    .name {
        height: 50px;
        width: 30%;
        z-index: 1;
        position: absolute;
        top: 20px;
        color: white;
        background-color: black;
        border-radius: 20px 0px 20px 0px;
        font-size: larger;
        text-align: center;
        padding-top: 20px;
    }

    img {
        height: 500px;
        width: 100%;
        border-radius: 20px 20px 0px 0px;
    }

    .details {
        height: 210px;
        width: 100%;
        color: black;
        background-color: #645d4f;
        margin: 0px;
        font-size: larger;
        text-align: left;
    }

    .details p {
        margin: 0px 0px 0px 10px;
        text-align: left;
    }

    .price {
        font-size: 19px;
        color: black;
    }

    .btn {
        height: 40px;
        width: 150px;
        background-color: orange;
        color: black;
        border: none;
        cursor: pointer;
        margin: 10px 0px 10px 0px;
        border-radius: 15px;
        font-size: large;
        font-family: font2;
    }

    .btn:hover {
        background-color: white;
        color: orange;
        border: 1px solid black;
    }

    .quantity p {
        color: white;
    }
    </style>
</head>

<body style="background-image: url('images/background.jpg');background-size:contain">
    <?php
    // session_start();
    // include "head.php";
    if (isset($_GET['famous_id'])) {
        $famous_id = $_GET['famous_id'];
    ?>
    <?php
        include '../connect.php';
        $sql = "select * from `famous_dishes` where `id`=$famous_id";
        $result = mysqli_query($con, $sql);
        $no = mysqli_num_rows($result);
        if ($no > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
        ?>
    <center>
        <div class="rin">
            <div class="name">
                <span><?php echo $row['name']; ?></span>
            </div>
            <div class="img">
                <img src="../admin/images/<?php echo $row['image']; ?>" alt="loading"
                    onerror="this.src='../foodcenter/images/loading.gif';">
            </div>
            <div class="details">
                <p style="color: white;">Details :-</p>
                <p style="margin-left: 30px;"><?php echo $row['details']; ?></p>
                <div class="price">
                    <p style="color: white;margin-left:10px;">Price :-</p>
                    <p style="margin-left: 30px;"><?php echo "₹" . $row['price'] . ".00"; ?></p>
                </div>
            </div>
        </div>
    </center>
    <?php
            }
        }
    } elseif (isset($_GET['id'])) {
        $id = $_GET['id'];
        include '../connect.php';
        $sql = "select * from `products` where `id`=$id";
        $result = mysqli_query($con, $sql);
        $no = mysqli_num_rows($result);
        if ($no > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
            ?>
    <center>
        <div class="rin">
            <div class="name">
                <span><?php echo $row['name']; ?></span>
            </div>
            <div class="img">
                <img src="../admin/images/<?php echo $row['image']; ?>" alt="loading"
                    onerror="this.src='../foodcenter/images/loading.gif';">
            </div>
            <div class="details">
                <p style="color: white;">Details :-</p>
                <p style="margin-left: 30px;"><?php echo $row['details']; ?></p>
                <div class="price">
                    <p style="color: white;margin-left:10px;display:inline;">Price :-</p>
                    <span style="margin-left: 30px;"><?php echo "₹ " . $row['price'] . ".00"; ?></span>
                </div>

            </div>
        </div>
    </center>
    <?php
            }
        }
    } else {
        echo "error";
    } ?>
    <!-- <?php include "footer.php"; ?> -->
</body>

</html>