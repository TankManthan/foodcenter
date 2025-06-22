<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../foodcenter/styles/contact_us.css">
    <link rel="stylesheet" href="../foodcenter/styles/homepage.css">
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

<body style="   background-image: url('../foodcenter/admin/images/burger\ \(3\).jpg');
      background-size: contain;">
    <?php
    include 'head.php';
    ?>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $con = mysqli_connect("localhost", "root", "", "foodcenter");
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        if ((preg_match('/^[a-zA-Z ]*$/', $name))) {
            if ((preg_match('/^[a-zA-Z ]*$/', $subject))) {
                $insert = "INSERT INTO `contact_us` (`id`, `full_name`, `email_address`, `subject`, `message`) VALUES (NULL, '$name', '$email', '$subject', '$message');";
                if (mysqli_query($con, $insert)) {
    ?>
    <div class="true">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Success.</strong> Request sent successfully...
    </div>
    <?php            }
            } else {
                ?>
    <div class="warning">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Warning !</strong> Provide appropriate subject ...
    </div>
    <?php
            }
        } else {
            ?>
    <div class="warning">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Warning !</strong> Name must contain only charcter...
    </div>
    <?php
        }
    }

    ?>
    <main class="contact-container glass">
        <center>
            <h1><i class="fa-regular fa-address-card"></i> Contact Us</h1>
        </center>

        <form action="contact_us.php" method="POST">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <center><button type="submit" class="button">Send Message</button></center>
        </form>

        <section class="contact-info">
            <h2>Our Contact Information</h2>
            <p><strong>Address:</strong> 302 Main Street, Vadala City, TX 75001</p>
            <p><strong>Phone:</strong> (320) 111-1111</p>
            <p><strong>Email:</strong> foodcenter18@gmail.com</p>
            <p><strong>Business Hours:</strong> Monday-Sunday, 10:00 AM - 12:00 PM</p>
        </section>
    </main>
</body>

</html>
<?php
include 'footer.php';
?>