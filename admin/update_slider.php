<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        .a {
            width: 100%;
            display: flex;
            /* align-items: center; */
            justify-content: center;
        }

        .c {
            z-index: 1;
            height: 400px;
            width: 600px;
            background-color: gainsboro;
            position: fixed;
            top: 10%;
            left: 30%;
            /* padding-top: 100px; */
            border: 1px solid black;
            border-radius: 15px;
            color: black;
            font-family: font2;
        }

        .c button {
            height: 30px;
            width: 150px;
            font-family: font2;
            background-color: orange;
            color: black;
            border: none;
            border-radius: 10px;
        }

        .c input {
            height: 30px;
            width: 300px;
            margin-left: 50px;
        }

        .c label {
            font-size: larger;
            margin-left: 50px;
        }

        .c textarea {
            margin-left: 50px;
            width: 490px;
            height: 50px;
        }

        .btn {
            height: 35px;
            width: 150px;
            font-family: font2;
            background-color: orange;
            color: black;
            border: none;
            border-radius: 10px;
        }

        .btn:hover {
            transition: 0.3s;
            color: orange;
            background-color: white;
        }
    </style>

</head>

<body style="   background-image: url('../admin/images/sandwich\ \(5\).jpg');
      background-size: contain;">
    <?php include 'head.php'; ?>
    <form action="update_slider.php" method="get">
        <?php
        if (isset($_GET['slideruid'])) {
            $id = $_GET['slideruid'];
        ?>
            <form action="update_slider.php" method="get">
                <input hidden type="number" name="id" value="<?php echo $id; ?>" style="display:none;">
                <div class="c">
                    <!-- <button name="cancel"
                style="position:fixed;top:12%;right:27%;height:30px;width:30px;background-color:transparent;">
                <i class="fa-solid fa-xmark"></i>
            </button> -->
                    <span class="closebtn" style="position:fixed;top:12%;right:27%;color:black;"
                        onclick="this.parentElement.style.display='none';"><a href="slider.php"
                            style="color:black;text-decoration:none;">&times;</a></span>
                    <center>
                        <h3>Update Information</h3>
                    </center>
                    <?php
                    include '../connect.php';
                    $sql = "select * from `slider` where id=$id";
                    $result = mysqli_query($con, $sql);
                    $num = mysqli_num_rows($result);
                    if ($num > 0) {
                        while ($ram = mysqli_fetch_assoc($result)) {
                    ?>
                            <label>Image :-</label><br>
                            <img src="../admin/images/<?php echo $ram['image']; ?>" alt=""
                                onerror="this.src='../foodcenter/images/loading.gif';"
                                style="height: 100px;width:200px;margin-left:50px;"><br>
                            <label>Change image :-</label>
                            <input type="file" name="name"><br>
                            <label>Enter slogan :-</label><br>
                            <textarea name="pass" required><?php echo $ram['slogan']; ?></textarea><br>
                    <?php }
                    } ?>
                    <center>
                        <input type="submit" value="Update" name="update2" class="btn">
                    </center>
                </div>
                <!-- <input hidden type="number" name="id" value="<?php echo $id; ?>" style="display:none;">
            Image :<input type="text" name="name" required><br>
            Slogan:<input type="text" name="pass" required><br>
            <input type="submit" value="Save" name="update2"> -->
            </form>
        <?php
        } ?>
        <?php
        if (isset($_GET['update2'])) {
            include '../connect.php';
            $id = $_GET['id'];
            $name = $_GET['name'];
            $pass = $_GET['pass'];
            $update = "UPDATE `slider` SET `image` = '$name', `slogan` = '$pass' WHERE `slider`.`id` = $id;";
            $result = mysqli_query($con, $update);
            if ($result) {
                echo "<script>alert('Record Updated Successfully...');
                window.location.href='slider.php'</script>";
            } else {
                echo "<p style='color:red;'>Error...<br></p>";
            }
        } else {
        }

        ?>
    </form>
    <?php include 'footer.php'; ?>
</body>

</html>