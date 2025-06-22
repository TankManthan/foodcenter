<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../admin/styles/homepage.css">
    <link rel="stylesheet" href="../admin/styles/contact_us.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style="background-image: url('../admin/images/background\ \(2\).jpg');background-size:contain">
    <?php include "head.php"; ?>
    <center>
        <h1 style="color:black;" class="glass">Clients Review</h1>
        <div class="con"
            style="width:80%;color:black;width:100%;  display: flex;flex-wrap: wrap;justify-content:center;">
            <?php
            include '../connect.php';
            $sql = "select * from `review`";
            $result = mysqli_query($con, $sql);
            $no = mysqli_num_rows($result);
            if ($no > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
            ?>
                    <div class="container1"
                        style="height:230px;width:230px;background-color:white;border-radius:20px;margin:20px;">
                        <a href="delete_review.php?deleteid=<?php echo $id; ?>"
                            style="color:blue;text-decoration:none;text-align:left">Delete
                            review</a>
                        <div class="name"
                            style="color:green;font-size:larger;margin:10px 0px 10px 0px;text-decoration:underline">
                            <?php echo strtoupper($row['name']); ?>
                        </div>
                        <div class="message"
                            style="font-size: larger;padding:10px;background-color:gold;border-radius:20px;margin:0px 20px 0px 20px;">
                            <span style="color: black;margin-right:150px;font-size:larger;">"</span><br>
                            <?php echo $row['message']; ?><br>
                            <soan style="color: black;margin-left:150px;font-size:larger;">"</span>
                        </div><br>
                        <div class="star">
                            <?php
                            $r = $row['star'];
                            if (filter_var($r, FILTER_VALIDATE_INT) == true) {
                                $i = (int)$r;
                                for ($a = 0; $a <= $i - 1; $a++) {
                                    echo '<i class="fa-solid fa-star" style="color:gold;"></i>';
                                }
                            } ?>
                        </div>
                    </div>
            <?php   }
            }  ?>

        </div>
    </center>
    <?php include 'footer.php'; ?>
</body>

</html>