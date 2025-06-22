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

        .a {
            width: 100%;
            display: flex;
            /* align-items: center; */
            justify-content: center;
        }

        .c {
            z-index: 1;
            height: 250px;
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
    </style>

</head>

<body style="   background-image: url('../admin/images/fries\ \(6\).jpg');
      background-size: contain;">
    <?php include 'head.php'; ?>
    <form action="update_help.php" method="get">
        <?php
        if (isset($_GET['updateid'])) {
            $id = $_GET['updateid'];
        ?>
            <form action="update_help.php" method="get">
                <input hidden type="number" name="id" value="<?php echo $id; ?>" style="display:none;">
                <main class="contact-container glass">
                    <center>
                        <h1><i class="fa-regular fa-address-card"></i> Update information</h1>
                    </center>
                    <span class="closebtn" style="position:fixed;top:4%;right:5%;color:black;"
                        onclick="this.parentElement.style.display='none';"><a href="help.php"
                            style="color:black;text-decoration:none;font-size:larger;">&times;</a></span>

                    <form action="add_help.php" method="POST">
                        <?php
                        include '../connect.php';
                        $sql = "select * from `help` where id=$id";
                        $result = mysqli_query($con, $sql);
                        $num = mysqli_num_rows($result);
                        if ($num > 0) {
                            while ($ram = mysqli_fetch_assoc($result)) {
                        ?>
                                <div class="form-group">
                                    <label for="subject">Enter question</label>
                                    <input type="text" id="subject" name="q" value="<?php echo $ram['que']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="message">Enter answer</label>
                                    <textarea id="message" name="a" required><?php echo $ram['ans']; ?></textarea>
                                </div>
                        <?php }
                        } ?>
                        <center><button type="submit" class="button" name="update2">Update</button></center>
                </main>
            </form>
        <?php
        } ?>
        <?php
        if (isset($_GET['update2'])) {
            include '../connect.php';
            $id = $_GET['id'];
            $name = $_GET['q'];
            $pass = $_GET['a'];
            $update = "UPDATE `help` SET `que` = '$name', `ans` = '$pass' WHERE `help`.`id` = $id;";
            $result = mysqli_query($con, $update);
            if ($result) {
                echo "<script>alert('Record Updated Successfully...');
                window.location.href='help.php'</script>";
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