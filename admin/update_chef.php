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

        /* .a {
        width: 100%;
        display: flex;
        justify-content: center;
    } */

        #btn {
            height: 35px;
            width: 150px;
            font-family: font2;
            background-color: orange;
            color: black;
            border: none;
            border-radius: 10px;
        }

        #btn:hover {
            transition: 0.3s;
            color: orange;
            background-color: white;
        }
    </style>

</head>

<body style="   background-image: url('../admin/images/pizza\ \(7\).jpg');
      background-size: contain;">
    <?php include 'head.php'; ?>
    <?php
    if (isset($_GET['update2'])) {
        include '../connect.php';
        $id = $_GET['id'];
        $name = $_GET['name'];
        $image = $_GET['image'];
        if ($image == NULL) {
            include '../connect.php';
            $sql = "select * from `chefs_deatils` where id=$id";
            $result = mysqli_query($con, $sql);
            $num = mysqli_num_rows($result);
            if ($num > 0) {
                while ($ram = mysqli_fetch_assoc($result)) {
                    $image = $ram['image'];
                }
            }
        }
        $desc1 = $_GET['desc1'];
        $desc2 = $_GET['desc2'];
        if ((preg_match('/^[a-zA-Z ]*$/', $name))) {
            $update = "UPDATE `chefs_deatils` SET `image` = '$image', `name` = '$name',`desc1`='$desc1',`desc2`='$desc2' WHERE `chefs_deatils`.`id` = $id;";
            $result = mysqli_query($con, $update);
            if ($result) {
                echo "<script>alert('Record Updated Successfully...');
                             window.location.href='chef.php'</script>";
            }
        } else {
    ?>
            <div class="warning">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <strong>Warning !</strong> Name must contain only charcter...
            </div>
            <form action="update_chef.php" method="get">
                <input hidden type="number" name="id" value="<?php echo $id; ?>" style="display:none;">
                <main class="contact-container glass">
                    <center>
                        <h1><i class="fa-regular fa-address-card"></i> Update information</h1>
                    </center>
                    <span class="closebtn" style="position:fixed;top:4%;right:5%;color:black;"
                        onclick="this.parentElement.style.display='none';"><a href="chef.php"
                            style="color:black;text-decoration:none;font-size:larger;">&times;</a></span>
                    <?php
                    include '../connect.php';
                    $sql = "select * from `chefs_deatils` where id=$id";
                    $result = mysqli_query($con, $sql);
                    $num = mysqli_num_rows($result);
                    if ($num > 0) {
                        while ($ram = mysqli_fetch_assoc($result)) {
                    ?>
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" id="name" name="name" value="<?php echo $ram['name']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="name"> Image </label>
                                <img src="../admin/images/<?php echo $ram['image']; ?>" alt=""
                                    onerror="this.src='../foodcenter/images/loading.gif';" style="height:250px;width:300px;">
                            </div>
                            <div class="form-group">
                                <label for="name">Change image</label>
                                <input type="file" id="name" name="image">
                            </div>
                            <div class="form-group">
                                <label for="subject">Awards and honour :-</label>
                            </div>
                            <div class="form-group">
                                <label for="subject">Decription 1</label>
                                <input type="text" id="subject" name="desc1" value="<?php echo $ram['desc1']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="subject">Description 2</label>
                                <input type="text" id="subject" name="desc2" value="<?php echo $ram['desc2']; ?>" required>
                            </div>
                    <?php }
                    } ?>
                    <center>
                        <input type="submit" value="Update details" name="update2" id="btn">
                        <!-- <button type="submit" class="button">Update request</button> -->
                    </center>
                </main>
            </form>
    <?php
        }
    }
    ?>
    <form action="update_chef.php" method="get">
        <?php
        if (isset($_GET['updateid'])) {
            $id = $_GET['updateid'];
        ?>
            <form action="update_chef.php" method="get">
                <input hidden type="number" name="id" value="<?php echo $id; ?>" style="display:none;">
                <main class="contact-container glass">
                    <center>
                        <h1><i class="fa-regular fa-address-card"></i> Update information</h1>
                    </center>
                    <span class="closebtn" style="position:fixed;top:4%;right:5%;color:black;"
                        onclick="this.parentElement.style.display='none';"><a href="chef.php"
                            style="color:black;text-decoration:none;font-size:larger;">&times;</a></span>
                    <?php
                    include '../connect.php';
                    $sql = "select * from `chefs_deatils` where id=$id";
                    $result = mysqli_query($con, $sql);
                    $num = mysqli_num_rows($result);
                    if ($num > 0) {
                        while ($ram = mysqli_fetch_assoc($result)) {
                    ?>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input type="text" id="name" name="name" value="<?php echo $ram['name']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="name"> Image </label>
                                    <img src="../admin/images/<?php echo $ram['image']; ?>" alt=""
                                        onerror="this.src='../foodcenter/images/loading.gif';" style="height:250px;width:300px;">
                                </div>
                                <div class="form-group">
                                    <label for="name">Change image</label>
                                    <input type="file" id="name" name="image">
                                </div>
                                <div class="form-group">
                                    <label for="subject">Awards and honour :-</label>
                                </div>
                                <div class="form-group">
                                    <label for="subject">Decription 1</label>
                                    <input type="text" id="subject" name="desc1" value="<?php echo $ram['desc1']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="subject">Description 2</label>
                                    <input type="text" id="subject" name="desc2" value="<?php echo $ram['desc2']; ?>" required>
                                </div>
                        <?php }
                    } ?>
                        <center>
                            <input type="submit" value="Update details" name="update2" id="btn">
                            <!-- <button type="submit" class="button">Update request</button> -->
                        </center>
                </main>
            </form>
        <?php } ?>

    </form>
    <?php include 'footer.php'; ?>
</body>

</html>