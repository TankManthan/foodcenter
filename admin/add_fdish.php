<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles//contact_us.css">
    <link rel="stylesheet" href="../styles/homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
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
    </style>
</head>

<body style="   background-image: url('../admin/images/pizza\ \(2\).jpg');
      background-size: contain;">
    <?php
    include 'head.php';
    ?>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $con = mysqli_connect("localhost", "root", "", "foodcenter");
        $name = $_POST['name'];
        $image = $_POST['image'];
        $details = $_POST['details'];
        $price = $_POST['price'];
        if ((preg_match('/^[a-zA-Z ]*$/', $name))) {
            $insert = "INSERT INTO `famous_dishes` (`id`, `image`, `name`, `details`, `price`) VALUES (NULL, '$image', '$name', '$details', $price);";
            if (mysqli_query($con, $insert)) {
                echo "<script>alert('Item added successfully...');
                window.location.href='famousdishes.php'</script>";
            }
        } else {
    ?>
            <div class="warning">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <strong>Warning !</strong> Name must contain only charcter...
            </div>
    <?php        }
    }

    ?>
    <main class="contact-container glass">
        <center>
            <h1><i class="fa-regular fa-address-card"></i> Add new dish</h1>
        </center>
        <span class="closebtn" style="position:fixed;top:4%;right:5%;color:black;"
            onclick="this.parentElement.style.display='none';"><a href="famousdishes.php"
                style="color:black;text-decoration:none;font-size:larger;">&times;</a></span>

        <form action="add_fdish.php" method="POST">
            <div class="form-group">
                <label for="name">Select image</label>
                <input type="file" id="name" name="image" required>
            </div>
            <div class="form-group">
                <label for="name">Dish Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="message">Dish details</label>
                <textarea id="message" name="details" required style="height: 100px;"
                    placeholder="Maximum 3 lines"></textarea>
            </div>
            <div class="form-group">
                <label for="subject">Price</label>
                <input type="number" id="subject" name="price" required>
            </div>
            <center><button type="submit" class="button">Add dish</button></center>
        </form>
    </main>
</body>

</html>
<?php
include 'footer.php';
?>