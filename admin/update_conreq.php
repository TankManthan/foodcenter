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

        .a {
            width: 100%;
            display: flex;
            /* align-items: center; */
            justify-content: center;
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

<body style="   background-image: url('../admin/images/burger\ \(3\).jpg');
      background-size: contain;">
    <?php include 'head.php'; ?>
    <?php
    if (isset($_GET['update2'])) {
        include '../connect.php';
        $id = $_GET['id'];
        $name = $_GET['name'];
        $email = $_GET['email'];
        $sub = $_GET['subject'];
        $mes = $_GET['message'];
        if ((preg_match('/^[a-zA-Z ]*$/', $name))) {
            if ((preg_match('/^[a-zA-Z ]*$/', $sub))) {
                $update = "UPDATE `contact_us` SET `full_name` = '$name', `email_address` = '$email',`subject`='$sub',`message`='$mes' WHERE `contact_us`.`id` = $id;";
                $result = mysqli_query($con, $update);
                if ($result) {
                    echo "<script>alert('Record Updated Successfully...');
                             window.location.href='contactinfo.php'</script>";
                }
            } else {
    ?>
                <div class=" warning">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    <strong>Warning !</strong> Provide appropriate subject ...
                </div>
                <form action="update_conreq.php" method="get">
                    <input hidden type="number" name="id" value="<?php echo $id; ?>" style="display:none;">
                    <main class="contact-container glass">
                        <center>
                            <h1><i class="fa-regular fa-address-card"></i> Update contact request</h1>
                        </center>
                        <span class="closebtn" style="position:fixed;top:4%;right:5%;color:black;"
                            onclick="this.parentElement.style.display='none';"><a href="contactinfo.php"
                                style="color:black;text-decoration:none;font-size:larger;">&times;</a></span>
                        <?php
                        include '../connect.php';
                        $sql = "select * from `contact_us` where id=$id";
                        $result = mysqli_query($con, $sql);
                        $num = mysqli_num_rows($result);
                        if ($num > 0) {
                            while ($ram = mysqli_fetch_assoc($result)) {
                        ?>
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input type="text" id="name" name="name" value="<?php echo $ram['full_name']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" id="email" name="email" value="<?php echo $ram['email_address']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" id="subject" name="subject" value="<?php echo $ram['subject']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea id="message" name="message" required><?php echo $ram['message']; ?></textarea>
                                </div>
                        <?php }
                        } ?>
                        <center>
                            <input type="submit" value="Update request" name="update2" class="btn">
                            <!-- <button type=" submit" class="button">Update request</button> -->
                        </center>
                    </main>
                </form>
            <?php
            }
        } else {
            ?>
            <div class="warning">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <strong>Warning !</strong> Name must contain only charcter...
            </div>
            <form action="update_conreq.php" method="get">
                <input hidden type="number" name="id" value="<?php echo $id; ?>" style="display:none;">
                <main class="contact-container glass">
                    <center>
                        <h1><i class="fa-regular fa-address-card"></i> Update contact request</h1>
                    </center>
                    <span class="closebtn" style="position:fixed;top:4%;right:5%;color:black;"
                        onclick="this.parentElement.style.display='none';"><a href="contactinfo.php"
                            style="color:black;text-decoration:none;font-size:larger;">&times;</a></span>
                    <?php
                    include '../connect.php';
                    $sql = "select * from `contact_us` where id=$id";
                    $result = mysqli_query($con, $sql);
                    $num = mysqli_num_rows($result);
                    if ($num > 0) {
                        while ($ram = mysqli_fetch_assoc($result)) {
                    ?>
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" id="name" name="name" value="<?php echo $ram['full_name']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email" value="<?php echo $ram['email_address']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" id="subject" name="subject" value="<?php echo $ram['subject']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" required><?php echo $ram['message']; ?></textarea>
                            </div>
                    <?php }
                    } ?>
                    <center>
                        <input type="submit" value="Update request" name="update2" class="btn">
                        <!-- <button type="submit" class="button">Update request</button> -->
                    </center>
                </main>
            </form>
    <?php
        }
    }
    ?>
    <form action="update_conreq.php" method="get">
        <?php
        if (isset($_GET['conreq_uid'])) {
            $id = $_GET['conreq_uid'];
        ?>
            <form action="update_conreq.php" method="get">
                <input hidden type="number" name="id" value="<?php echo $id; ?>" style="display:none;">
                <main class="contact-container glass">
                    <center>
                        <h1><i class="fa-regular fa-address-card"></i> Update contact request</h1>
                    </center>
                    <span class="closebtn" style="position:fixed;top:4%;right:5%;color:black;"
                        onclick="this.parentElement.style.display='none';"><a href="contactinfo.php"
                            style="color:black;text-decoration:none;font-size:larger;">&times;</a></span>
                    <?php
                    include '../connect.php';
                    $sql = "select * from `contact_us` where id=$id";
                    $result = mysqli_query($con, $sql);
                    $num = mysqli_num_rows($result);
                    if ($num > 0) {
                        while ($ram = mysqli_fetch_assoc($result)) {
                    ?>
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" id="name" name="name" value="<?php echo $ram['full_name']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email" value="<?php echo $ram['email_address']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" id="subject" name="subject" value="<?php echo $ram['subject']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" required><?php echo $ram['message']; ?></textarea>
                            </div>
                    <?php }
                    } ?>
                    <center>
                        <input type="submit" value="Update request" name="update2" class="btn">
                        <!-- <button type="submit" class="button">Update request</button> -->
                    </center>
                </main>
            </form>
        <?php } ?>

    </form>
    <?php include 'footer.php'; ?>
</body>

</html>