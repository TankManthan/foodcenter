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

<body style="   background-image: url('../admin/images/gujarati\ food\ \(1\).jpg');
      background-size: contain;">
    <?php
    include 'head.php';
    ?>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $con = mysqli_connect("localhost", "root", "", "foodcenter");
        $image = $_POST['image'];
        $name = $_POST['name'];
        $details = $_POST['details'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        if ((preg_match('/^[a-zA-Z ]*$/', $name))) {
            $insert = "INSERT INTO `products` (`id`, `image`, `name`, `details`, `price`,`category`) VALUES (NULL, '$image', '$name', '$details', $price,'$category');";
            if (mysqli_query($con, $insert)) {
                echo "<script>alert('Item added successfully...');
                window.location.href='items.php'</script>";
            }
        } else {
        }
    ?>
        <div class="warning">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <strong>Warning !</strong> Name must contain only charcter...
        </div>
    <?php
    }
    ?>
    <main class="contact-container glass">
        <center>
            <h1><i class="fa-regular fa-address-card"></i> Add item</h1>
        </center>
        <span class="closebtn" style="position:fixed;top:4%;right:5%;color:black;"
            onclick="this.parentElement.style.display='none';"><a href="items.php"
                style="color:black;text-decoration:none;font-size:larger;">&times;</a></span>

        <form action="add_item.php" method="POST">
            <div class="form-group">
                <label for="name">Select image</label>
                <input type="file" id="name" name="image" required>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="message">Details</label>
                <textarea id="message" name="details" required></textarea>
            </div>
            <div class="form-group">
                <label for="subject">Price</label>
                <input type="number" min="1" id="subject" name="price" required>
            </div>
            <div class="star">
                <label for="star">Select category
                </label>
                <br> <select id="star" name="category" required
                    style="width:200px;background-color:transparent;border-radius:15px;height:33px;border:1px solid black;">
                    <?php
                    include '../connect.php';
                    $sql = "select * from `categories`";
                    $result = mysqli_query($con, $sql);
                    $num = mysqli_num_rows($result);
                    $srno = 0;
                    if ($num > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                    ?>
                            <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?> </option>
                    <?php }
                    } ?>
                </select>
            </div>
            <center><button type="submit" class="button">Add item</button></center>
        </form>
    </main>
</body>

</html>
<?php
include 'footer.php';
?>