<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../foodcenter/styles/homepage.css">
</head>
<style>
.obito {
    height: 300px;
    width: 90%;
    background-color: white;
    border-radius: 15px;
    color: black;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    background-image: url('admin/images/mexican-sauces-blue-background.jpg');
    background-size: contain;
}

.obito img {
    height: 220px;
    width: 90%;
    border-radius: 10px;
}

.obito a {
    color: black;
    text-decoration: none;
}

.obito1 {
    height: 250px;
    width: 45%;
    margin: 10px;
    border-radius: 10px;
}

.obito2 {
    height: 250px;
    width: 45%;
    margin: 10px;
    border-radius: 10px;
}
</style>

<body>
    <?php include 'head.php'; ?>
    <center>
        <h1 style="background-color: white;color:black;border-radius:15px;height:50px;width:90%;margin-bottom:10px;">
            Checkout</h1>
    </center>
    <center>
        <div class="obito">
            <div class="obito1">
                <a href="payoffline.php">Pay Offline<br>
                    <img src="../foodcenter/admin/images/offline.png" alt=""
                        onerror="this.src='../foodcenter/images/loading.gif';">
                </a>
            </div>
            <div class="obito2">
                <a href="payonline.php">Pay Online<br>
                    <img src="../foodcenter/admin/images/online.jpeg" alt=""
                        onerror="this.src='../foodcenter/images/loading.gif';">
                </a>
            </div>
        </div>
    </center>
    <?php include 'footer.php'; ?>
</body>

</html>