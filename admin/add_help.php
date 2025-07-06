<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../admin/styles/homepage.css">
    <link rel="stylesheet" href="../admin/styles/contact_us.css">
    <style>
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

<body style="   background-image: url('../admin/images/fries\ \(3\).jpg');
      background-size: contain;">
    <?php include 'head.php'; ?>
    <form action="add_help.php" method="POST">
        <main class="contact-container glass">
            <center>
                <h1><i class="fa-regular fa-address-card"></i> Add FAQ</h1>
            </center>
            <span class="closebtn" style="position:fixed;top:4%;right:5%;color:black;"
                onclick="this.parentElement.style.display='none';"><a href="help.php"
                    style="color:black;text-decoration:none;font-size:larger;">&times;</a></span>

            <form action="add_help.php" method="POST">
                <div class="form-group">
                    <label for="subject">Enter question </label>
                    <input type="text" id="subject" name="q" required>
                </div>
                <div class="form-group">
                    <label for="message">Enter answer</label>
                    <textarea id="message" name="a" required></textarea>
                </div>
                <center><button type="submit" class="button" name="add">Add</button></center>
        </main>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add'])) {
            include '../connect.php';
            $image = $_POST['q'];
            $slogan = $_POST['a'];
            $add = "insert into `help`(`id`,`que`,`ans`) values(NULL,'$image','$slogan')";
            $result = mysqli_query($con, $add);
            if ($result) {
                echo "<script>alert('Record added successfully...');
                window.location.href='help.php'</script>";
            }
        }
        ?>
    </form>
    <?php include 'footer.php'; ?>
</body>

</html>